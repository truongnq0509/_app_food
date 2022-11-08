/**
 * Panda Plugin - Products Compare
 *
 * @version 1.2.0
 */
'use strict';
window.Panda || ( window.Panda = {} );

( function ( $ ) {
    Panda.productCompare = function () {

        function changeCompareItemPos( e ) {
            e.preventDefault();

            var $basicInfo = $( this ).closest( '.compare-basic-info' );

            if ( $basicInfo.find( '.d-loading' ).length ) {
                return;
            }

            var $button = $( this ),
                idx = $button.closest( '.compare-value' ).index() - 1;

            $( this ).closest( '.panda-compare-table' ).find( '.compare-row' ).each(
                function () {
                    var $orgItem = $( this ).children( '.compare-value' ).eq( idx ),
                        $dstItem = $button.hasClass( 'to-left' ) ? $orgItem.prev() : $orgItem.next(),
                        percent = $button.closest( '.compare-col' ).innerWidth() / $button.closest( '.compare-row' ).innerWidth() * 100,
                        orgMove = ( $button.hasClass( 'to-left' ) ? '-' : '' ) + percent + '%',
                        dstMove = ( $button.hasClass( 'to-left' ) ? '' : '-' ) + percent + '%';

                    $orgItem.animate(
                        {
                            left: orgMove
                        },
                        400,
                        function () {
                            $orgItem.css( 'left', '' );

                            if ( $button.hasClass( 'to-left' ) ) {
                                $orgItem.after( $dstItem );
                            } else {
                                $orgItem.before( $dstItem );
                            }
                        }
                    );

                    $dstItem.animate(
                        {
                            left: dstMove
                        },
                        400,
                        function () {
                            $dstItem.css( 'left', '' );
                        }
                    );
                }
            );
        }

        $( document )
            .on( 'click', '.panda-compare-table .to-left, .panda-compare-table .to-right', changeCompareItemPos )
            .on( 'click', '.panda-compare-table .btn-close', function ( e ) {
                e.preventDefault();
                var $this = $( this );
                var index = $this.closest( '.compare-col' ).index(),
                    parent = $this.closest( '.panda-compare-table' );
                parent.find( '.compare-row' ).each( function () {
                    $( this ).find( '.compare-col' ).eq( index ).remove();
                } );

                if ( parent.find( '.compare-value' ).length == 0 ) {
                    document.location.href = 'compare-empty.html';
                }
            } );
    }

    $( window ).on( 'panda_complete', Panda.productCompare );
} )( jQuery );
