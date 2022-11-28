function Validator(formSelector) {
    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }

            element = element.parentElement;
        }
    }

    var formElement = document.querySelector(formSelector);
    var formRules = {};
    var validatorRules = {
        required(value) {
            return value.trim() ? undefined : "Không được để trống !!!";
        },
        email(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value)
                ? undefined
                : "Vui lòng nhập chính xác email của bạn";
        },
        number(value) {
            var regex = /^[-+]?[0-9]+$/;
            return regex.test(value)
                ? undefined
                : "Vui lòng nhập nhập số";
        },
        min(min) {
            return function (value) {
                return value.length >= min ? undefined : `Vui lòng nhập tối thiểu ${min} kí tự`
            }
        },
        checked(elementChecked) {
            return elementChecked ? undefined : "Vui lòng chọn trường này";
        },
    };

    if (formElement) {
        var inputs = formElement.querySelectorAll("[name][rules]");

        for (var input of inputs) {
            var rules = input.getAttribute("rules").split("|");

            for (var rule of rules) {
                if (rule && !rule.includes("beConfirm")) {
                    var isRuleHasValue = rule.includes(":");
                    var ruleInfo, ruleFunc;

                    if (isRuleHasValue) {
                        ruleInfo = rule.split(":");
                        ruleFunc = validatorRules[ruleInfo[0]](ruleInfo[1]);
                    } else {
                        ruleFunc = validatorRules[rule];
                    }

                    if (
                        Array.isArray(formRules[input.name]) &&
                        !formRules[input.name].includes(ruleFunc)
                    ) {
                        formRules[input.name].push(ruleFunc);
                    } else {
                        formRules[input.name] = [ruleFunc];
                    }
                } else if (!Array.isArray(formRules[input.name])) {
                    formRules[input.name] = [];
                }
            }

            input.onblur = handleValidate;
            input.oninput = handleOnInput;
        }

        function Valid(element) {
            var formGroup = getParent(element, ".form-group");

            if (formGroup && formGroup.classList.contains("invalid")) {
                var formMessage = formGroup.querySelector(".form-message");

                if (formMessage) {
                    formMessage.innerText = "";
                    formGroup.classList.remove("invalid");
                }
            }
        }

        function InValid(element, errorMessage) {
            var formGroup = getParent(element, ".form-group");

            if (formGroup) {
                var formMessage = formGroup.querySelector(".form-message");

                if (formMessage) {
                    formMessage.innerText = errorMessage;
                    formGroup.classList.add("invalid");
                }
            }
        }

        function handleValidate(e) {
            var rules = formRules[e.target.name];
            var errorMessage;

            for (var rule of rules) {
                switch (e.target.type) {
                    case "radio":
                    case "checkbox":
                        var inputChecked = formElement.querySelector(
                            `input[name="${e.target.name}"][rules]:checked`
                        );
                        errorMessage = rule(inputChecked);
                        break;
                    default:
                        errorMessage = rule(e.target.value);
                }

                if (errorMessage) break;
            }

            if (errorMessage) {
                InValid(e.target, errorMessage);
            }

            return !!errorMessage;
        }

        function handleOnInput(e) {
            var rulesString = e.target.getAttribute("rules");

            Valid(e.target);

            if (rulesString.includes("beConfirm")) {
                var confirmSelector = rulesString.slice(
                    rulesString.indexOf("beConfirm") + 10
                );

                if (confirmSelector) {
                    var confirmElement =
                        document.querySelector(confirmSelector);
                    var isInValid = validatorRules.confirm(confirmSelector)(
                        e.target.value
                    );

                    if (!isInValid) {
                        Valid(confirmElement);
                    } else if (confirmElement.value) {
                        InValid(confirmElement, isInValid);
                    }
                }
            }
        }

        formElement.onsubmit = function (e) {
            e.preventDefault();
            var isValid = true;

            for (var input of inputs) {
                if (handleValidate({ target: input })) {
                    isValid = false;
                }
            }

            if (isValid) {
                formElement.submit();
            }
        }
    }
}

