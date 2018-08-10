(function( $ ) {
	$(document).ready(function(){
		/*
		* include new function centralHassAttr
		*/
		$.fn.centralHassAttr = function( name ) {
			return $( this ).attr(name) !== undefined;
		};

		/*
		* display middle letter of blogname in orange color,
		* variable blogName we get from functions.php
		*/
		var blogNameArray = centralStringJs.blogName.split( '' ), /* split 'string' in to 'array' */
				arrayLength   = blogNameArray.length, /* get size of array */
				middle        = Math.floor( arrayLength / 2 ), /* get number of middle letter */
				firstLetters  = blogNameArray[ 0 ], /* we skid a first letter in to firstLetters */
				midLetter     = blogNameArray[ middle ], /* we skid a middle letter in to midLetter */
				lastLetters   = blogNameArray[ middle + 1 ], /* we skid a next letter after the middle letter in to lastLetters */
				i;
		for ( i = 1; i < middle; i++ ) { /* we add all letters before a middle in to firstLetters */
			firstLetters+=blogNameArray[i];
		}
		for ( i = middle + 2; i < arrayLength; i++ ) { /* we add all letters after a middle in to lastLetters */
			lastLetters += blogNameArray[i];
		}

		/* create 'span' elements and entered text in them */
		$( '#site-title' ).find( 'span a' ).append('<span id="first-letters"></span>')
			.append('<span id="middle-letter"></span>')
			.append('<span id="last-letters"></span>');
		$( '#first-letters' ).text( firstLetters );
		$( '#middle-letter' ).text( midLetter );
		$( '#last-letters' ).text( lastLetters );

		/* slide for multilevel lists */
		$( '.main-menu li' ).mouseenter( function() {
			/*we get rest space from current sub menu to right side of window */
			var windowWidth      = $( window ).width(),
					parentWidth      = $( this ).width(),
					offset           = $( this ).offset(),
					parentLeftOffset = offset.left,
					restSpace        = windowWidth - parentLeftOffset - parentWidth;
			/* displaying next sub menu right or left of the previous sub menu */
			if ( restSpace < 218 && ( $( this ).parent().hasClass( 'sub-menu' ) || $( this ).parent().hasClass( 'children' ) ) ) {
				$( this ).children( 'ul' ).css( 'marginLeft', '-220px' );
			}
			$( this ).children( 'ul' ).slideDown( 300 );
		} ).mouseleave( function() {
			$( this ).children( 'ul' ).slideUp( 300 );
		} );

		/*
		* main menu last child for ie
		*/
		$( '#ie7 .sub-menu, #ie8 .sub-menu, #ie7 .children, #ie8 .children' ).each( function() {
			$( this ).children( 'li' ).last().css( 'border', 'none' );
		} );

		/*
		* slider script
		*/
		var count = 0; /* number of slides*/
		 $( '.slider-wrap .slider ul' ).children( 'li' ).each( function() {
			if ( $( this ).parent().hasClass( 'slides' ) ) {
				count++;
			}
		} );
		var currentSlide = 0, /* number of current slide */
				nextSlide    = 0, /* number of next slide */
				lastSlide    = count - 1, /* number of last slide */
				timeout      = 0;
		$( '.slider-wrap .slider' ).children().children( 'li' ).each( function( i ) {
			$( this ).addClass( 'slide-'+i );
			$( '.slider-nav' ).append( '<a href=\"javascript:void(0);\" class="nav-' + i + '">' + i + '</a>' );
		});

		/* display first slide and show current link */
		$( '.nav-0' ).addClass( 'current-nav' );
		$( '.slide-0' ).addClass( 'current-slide' );
		/* when link was clicked */
		$( '.slider-nav a' ).click( function() {
			clearInterval( timeout ); /* stop centralCircle() */
			currentSlide = parseInt( $( this ).text() );
			if ( ! $( this ).hasClass( 'current-nav' ) ) { /* add a class 'current-nav' to the link that was clicked */
				$( '.slider-nav a' ).each( function() {
					if ( $( this ).hasClass( 'current-nav' ) ) {
						$( this ).removeClass( 'current-nav' );
					}
				} );
			}
			$( this ).addClass( 'current-nav' );
			$( '.slider-wrap .slider ul li' ).each( function() { /* add a class 'current-slide' class to the corresponding list item and displey him */
				if ( $( this ).hasClass( 'current-slide' ) ) {
					$( this ).removeClass( 'current-slide' ).fadeOut( 3000 );
				}
			} );
			$( '.slide-' + currentSlide ).addClass( 'current-slide' ).fadeIn( 3000 );
			timeout = setInterval( centralCicle, 7000 ); /* start centralCicle() */
		} );

		/* function to change slides */
		function centralCicle() {
			currentSlide = parseInt( $( '.current-nav' ).text() );
			if ( currentSlide == lastSlide ) {
				nextSlide = 0;
			} else {
				nextSlide = currentSlide + 1;
			}
			$( '.nav-' + currentSlide ).removeClass( 'current-nav' );
			$( '.nav-' + nextSlide ).addClass( 'current-nav' );
			$( '.slide-' + currentSlide ).removeClass( 'current-slide' ).fadeOut( 3000 );
			$( '.slide-' + nextSlide ).addClass( 'current-slide' ).fadeIn( 3000 );
		}
		timeout = setInterval( centralCicle, 7000 );

		/*
		* attribute "placeholder" for ie script
		*/
		$(function() {
			var input = document.createElement( "input" );
			 if ( ( 'placeholder' in input ) == false ) {
				$( '[placeholder]' ).focus( function() {
					if ( $( this ).val() == $( this ).attr( 'placeholder' ) ) {
						$( this ).val( '' ).removeClass( 'placeholder' );
					}
				} ).blur( function() {
					if ( $( this ).val() == '' || $( this ).val() == $( this ).attr( 'placeholder' ) ) {
						$( this ).addClass( 'placeholder' ).val( $( this ).attr( 'placeholder' ) );
					}
				} ).blur().parents( 'form' ).submit( function() {
					$( this ).find( '[placeholder]' ).each( function() {
						if ( $( this ).val() == $( this ).attr( 'placeholder' ) ) {
							$( this ).val( '' );
						}
					} );
				} );
			}
		} );
		$( '#ie7 .widget, #ie7 .search-wrap, #ie7 .post' ).before( '<div class="clear"></div>' );

		/*
		* search script
		*/
		$( '.search-wrap' ).each( function() {
			if ( $( this ).parent().hasClass( 'widget' ) ) {
				$( this ).parent().removeClass( 'widget' );
			}
		} );
		$( '#ie7 .search-wrap, #ie8 .search-wrap' ).append( '<div class="search-image"></span>' );
		$( '#ie7 .search-field, #ie8 .search-field' ).focus( function() {
			$( this ).css( {
				top:       '-1px',
				left:      '-1px',
				padding:   '15px 20px',
				border:    '1px solid #d9d7d5',
				boxShadow: '0px 0px 5px rgba(220,220,220,1)'
			} );
		} ).blur( function() {
			$( this ).css( {
				top:       '5px',
				left:      '5px',
				padding:   '10px 15px',
				border:    'none',
				boxShadow: '0px 0px 5px rgba(255, 255, 255, 1)'
			} );
		} );

		/*
		* widget menu slide script
		*/
		$( '.widget ul li' ).mouseenter( function() {
			$( this ).children( 'ul' ).slideDown( 300 );
		} ).mouseleave( function() {
			$( this ).children( 'ul' ).slideUp( 300 );
		} );

		/*
		* input[type="text,password"] and textarea script
		*/
		$( '#ie7 textarea, #ie8 textarea' ).wrap( '<span class="textarea-wrap">' );
		$( '#ie7 .post input:text, #ie8 .post input:text, #ie7 .post  input:password, #ie8 .post input:password' ).each(function() {
			if ( ! $( this ).hasClass( 'search-field' ) ) {
				$( this ).wrap( '<span class="input-wrap">' );
			}
		} );

		/* function to show animation effects when elements in focus or blur */
		$( '#ie7 textarea, #ie8 textarea, #ie7 .post input:text, #ie8 .post input:text, #ie7 input:password, #ie8 input:password' ).each( function() {
			if ( ! $( this ).hasClass( 'search-field' ) ) {
				var normalWidth  = $( this ).width(),
						focusWidth   = normalWidth + 10,
						normalHeight = $( this ).height(),
						focusHeight  = normalHeight + 10;
				$( this ).focus( function() {
					$( this ).css( {
						width:     focusWidth,
						height:    focusHeight,
						top:       '-1px',
						left:      '-1px',
						border:    '1px solid #e7e6e5',
						boxShadow: '0px 0px 5px rgba(220,220,220,1)'
					} );
					var id = $( 'html' ).attr( 'id' );
					if ( id == 'ie7' ) {
						$( this ).css( {
							top:  '0px',
							left: '0px'
						} );
					}
				} ).blur( function() {
					$( this ).css( {
						width:     normalWidth,
						height:    normalHeight,
						top:       '5px',
						left:      '5px',
						border:    'none',
						boxShadow: '0px 0px 5px rgba(255, 255, 255, 1)'
					} );
				} );
			}
		} );

		/*
		* select script
		*/
		var select = $( 'select' );
		select.hide().addClass( 'sel-styled' ).wrap( '<span class="sel-styled-cont">' );
		$( '#ie7 .sel-styled-cont, #ie8 .sel-styled-cont' ).wrap( '<span class="select-wrap">' );
		$( '.sel-styled-cont' ).append( '<span class="sel-styled-inner"></span>' ).append('<span class="sel-styled-cont-open"></span>');
		$( 'body' ).on( 'click', function( e ) {
			var id = $( 'html' ).attr( 'id' ), elem;
			if ( $( e.target ).hasClass( 'sel-styled-cont' ) ) {
				elem = e.target;
			} else if ( $( e.target ).closest( '.sel-styled-cont' ).length >0 ) {
				elem = $( e.target ).closest( '.sel-styled-cont' );
			} else {
				elem = false;
			}

			if ( elem && ! $( elem ).hasClass( 'out-shadow' ) ) {
				$( this ).find( '.sel-styled-cont' ).removeClass( 'out-shadow' );
				if ( id == 'ie7' || id == 'ie8' ) {
					$( this ).find( '.sel-styled-cont' ).css( {
						top:       '5px',
						left:      '5px',
						width:     '210px',
						height:    '34px',
						border:    'none',
						boxShadow: '0px 0px 5px rgba(255, 255, 255, 1)'
					} );
					$( this ).find( '.sel-styled-inner' ).css( { top: '12px', right: '14px' } );
					$( this ).find( '.sel-styled-text' ).css( { top: '-1px', left: '-4px' } );
				}
				$( this ).find( '.sel-styled-cont-open' ).slideUp( 100 );

				$( elem ).addClass( 'out-shadow' );
				if ( id == 'ie7' || id == 'ie8' ) { /* animation effects for select in ie when select in focus or blur */
					$( elem ).css( {
						top:       '0px',
						left:      '0px',
						width:     '220px',
						height:    '44px',
						border:    '1px solid #e7e6e5',
						boxShadow: '0px 0px 5px rgba(220, 220, 220, 1)'
					} );
					$( elem ).find( '.sel-styled-inner' ).css( { top: '17px', right: '19px' } );
					$( elem ).find( '.sel-styled-text' ).css( { top: '4px', left: '1px' } );
				}
				$( elem ).find( '.sel-styled-cont-open' ).slideDown( 100 );
			} else {
				$( this ).find( '.sel-styled-cont' ).removeClass( 'out-shadow' );
				if ( id == 'ie7' || id == 'ie8' ) {
					$( elem ).css( {
						top:       '5px',
						left:      '5px',
						width:     '210px',
						height:    '34px',
						border:    'none',
						boxShadow: '0px 0px 5px rgba(255, 255, 255, 1)'
					} );
					$( this ).find( '.sel-styled-inner' ).css( { top: '12px', right: '14px' } );
					$( this ).find( '.sel-styled-text' ).css( { top: '-1px', left: '-4px' } );
				}
				$( this ).find( '.sel-styled-cont-open' ).slideUp( 100 );
			}
		} );

		/* set values from dropdown menu item to select main field */
		$( '.sel-styled-cont-open' ).on( 'click', '.sel-styled-opt', function( e ) {
			var elem = e.target;
			$( elem ).closest( '.sel-styled-cont' ).find( '.sel-styled-text' ).text( $( elem ).text() );
			$( elem ).closest( '.sel-styled-cont' ).find( '.sel-styled' ).val( $( elem ).text() );
			$( elem ).closest( '.sel-styled-cont' ).find( 'select' ).find( 'option' ).removeAttr( 'selected' );
			$( elem ).closest( '.sel-styled-cont' ).find( 'select' ).find( 'optgroup, option' ).eq( $( elem ).index() ).attr( 'selected', 'selected' ).trigger( 'change' );
		} );

		select.each( function() { /* script for child elements of script */
			if ( $( this ).find( 'option[selected]' ).length > 0 ) {
				$( this ).parent().append( '<span class="sel-styled-text">' + $( this ).find( 'option[selected]' ).text() + '</span>' );
			} else {
				$( this ).parent().append( '<span class="sel-styled-text">' + $( this ).find( 'option:first' ).text() + '</span>' );
			}

			if ( $( this ).find( 'optgroup' ).length > 0 ) {
				$( this ).find( 'optgroup' ).each( function() {
					$( this ).closest( '.sel-styled-cont' ).find( '.sel-styled-cont-open' ).append( '<span class="sel-styled-optgroup">' + $( this ).attr( 'label' ) + '</span>' );
					$( this ).find( 'option' ).each( function() {
						if ( $( this ).attr( 'disabled' ) ) {
							$( this ).closest( '.sel-styled-cont' ).find( '.sel-styled-cont-open' ).append( '<span class="sel-styled-opt-dis">' + $( this ).text() + '</span>' );
						} else {
							$( this ).closest( '.sel-styled-cont' ).find( '.sel-styled-cont-open' ).append( '<span class="sel-styled-opt">' + $( this ).text() + '</span>' );
						}
					} );
				} );
			} else {
				$( this ).find( 'option' ).each( function() {
					if ( $( this ).attr( 'disabled' ) ) {
						$( this ).closest( '.sel-styled-cont' ).find( '.sel-styled-cont-open' ).append( '<span class="sel-styled-opt-dis">' + $( this ).text() + '</span>' );
					} else {
						$( this ).closest( '.sel-styled-cont' ).find( '.sel-styled-cont-open' ).append( '<span class="sel-styled-opt">' + $( this ).text() + '</span>' );
					}
				} );
			}
		} );

		/*
		* radio script
		*/
		$( 'input:radio' ).addClass( 'rad-styled' ).wrap( '<span class="rad-styled-cont">' ).click( function() {
			$( 'input:radio' ).each( function() {
				if ( $( this ).parent().hasClass( 'checked' ) ) {
					$( this ).parent().removeClass( 'checked' );
				}
			} );
			$( this ).parent().addClass( 'checked' );
		} );
		$( 'input:radio:checked' ).parent().addClass( 'checked' );
		$( '.rad-styled-cont' ).append( '<span class="rad-styled-inner"></span>' );

		/*
		* checkbox script
		*/
		$( 'input:checkbox' ).addClass( 'che-styled' ).wrap( '<span class="che-styled-cont">' ).click( function() {
			$( this ).parent().toggleClass( 'checked' );
		} );
		$( 'input:checkbox:checked' ).parent().addClass( 'checked' );
		$( '.che-styled-cont' ).append( '<span class="che-styled-inner"></span>' );
		$( '.che-styled-inner ').click( function() {
			$( this ).parent().removeClass( 'checked' );
			if ( $( this ).parent().children( 'input:checkbox' ).centralHassAttr( 'checked' ) ) {
				$( this ).parent().children( 'input:checkbox' ).removeAttr( 'checked' );
			}
		} );

		/*
		* labels of radioboxes and checkboxes script
		*/
		$( '.rad-styled-cont, .che-styled-cont' ).next( 'label' ).each( function() {
			$( this ).addClass( 'form-label' );
		} );

		/*
		* file-input script, variables chooseFile, fileSelected and fileNotSelected we get from functions.php
		*/
		$( 'input:file' ).addClass( 'file-styled' ).wrap( '<span class="file-styled-cont">' ).on( 'change', function() {
			$( this ).parent().children( '.file-styled-validator' ).text( $( this )[ 0 ].files[ 0 ][ 'name' ] );
		} );
		$( '.file-styled-cont' ).wrap( '<span class="file-input-form">' )
			.append('<span class="file-styled-inner"></span>')
			.append('<span class="file-styled-arrow"></span>')
			.append('<span class="file-styled-validator"></span>');
		$( '.file-styled-inner' ).text( centralStringJs.chooseFile );
		$( '.file-styled-validator' ).text( centralStringJs.fileNotSelected );

		/*
		* animate buttons script
		*/
		$( 'button, input:reset, input:button, input:submit' ).mouseenter( function() {
			$( this ).animate( { boxShadow: '0 0 5px #bbb', backgroundColor: '#333' }, 300 );
		} ).mouseleave( function() {
			$( this ).animate( { boxShadow: '0 0 0 #bbb', backgroundColor: '#e37351' }, 300 );
		} ).click( function() {
			$( this ).animate( { boxShadow: '0 0 0 #bbb', backgroundColor: '#333' }, 300 );
		} );

		/* 
		* reset button script
		*/
		$( 'input:reset' ).click( function() {
			var resetForm = $( this ).closest( 'form' );
			resetForm.find( 'select' ).each( function() {
				$( this ).children( 'option' ).removeAttr( 'selected' );
				$( this ).parent().find( '.sel-styled-text' ).text( $( this ).children( 'option:first' ).text() );
			} );
			resetForm.find( 'input:radio' ).each( function() {
				$( this ).parent().removeClass( 'checked' );
				if ( $( this )[0].hasAttribute( 'checked' ) ) {
					$( 'input:radio:checked' ).parent().addClass( 'checked' );
				}
			} );
			resetForm.find( 'input:checkbox' ).each( function() {
				$( this ).parent().removeClass( 'checked' );
			} );
			resetForm.find( 'input:file' ).each( function() {
				$( this ).val( '' );
				$( '.file-styled-inner' ).text( centralStringJs.chooseFile );
				$( '.file-styled-validator' ).text( centralStringJs.fileNotSelected );
			} );
		} );
		$( '.anchor' ).click( function () {
			$( 'html' ).animate( { scrollTop: 0 }, 2000 );
		} );

		/*
		* blockquote in ie7 script
		*/
		$( '#ie7' ).find( 'blockquote' ).each( function() {
			var text = '\"' + $( this ).children( 'p' ).text() + '\"';
			$( this ).children( 'p' ).text( text ).before( '<div class="blockquote-before"></div>' );
		} );

		/*
		* quote in ie7 script
		*/
		$( '#ie7' ).find( 'q' ).each( function() {
			var text = '\"' + $( this ).text() + '\"';
			$( this ).text( text );
		} );
	} )
} )(jQuery);