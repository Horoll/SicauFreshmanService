		/* ------------------------------------------------------------------------ */
		/* Background Slider
		/* ------------------------------------------------------------------------ */

		$('body').vegas({
			overlay: 'img/overlay.png',
		    slides: [
		        { src: 'img/banner3.jpg' },
		        { src: 'img/banner2.jpg' },
		        { src: 'img/banner1.jpg' },
		    ],
		});


		/* ------------------------------------------------------------------------ */
		/* Count Down Timer
		/* ------------------------------------------------------------------------ */
		$('.countdown-container').countDown({
			targetDate: {
				'day': 		31,
				'month': 	8,
				'year': 	2017,
				'hour': 	12,
				'min': 		0,
				'sec': 		0
			},
			omitWeeks: true
		});


		/* ------------------------------------------------------------------------ */
		/* AJAX SUBSCRIBE UPDATED
		/* ------------------------------------------------------------------------ */
		var formRegister;	
		jQuery(function() {
		
			// Get the form.
			var form = jQuery('#subscribe_form');
			
			// Get the messages div.
			formRegister = jQuery('#form-subscriber');
		
			// Set up an event listener for the contact form.
			form.submit(function(e) {
				// Stop the browser from submitting the form.
				e.preventDefault();
		
				// Serialize the form data.
				var formData = form.serialize();
		
				// Submit the form using AJAX.
				jQuery.ajax({
					type: 'POST',
					url: form.attr('action'),
					data: formData
				})
				.done(function(response) {
					// Make sure that the formRegister div has the 'success' class.
					formRegister.removeClass('error');
					formRegister.addClass('success');
					
					// Set the message text.
					formRegister.text(response);

					form[0].reset();
					// remove the message.
					setTimeout(function() { formRegister.empty().removeClass('success'); },5000);
								
					
				})
				.fail(function(data) {
					// Make sure that the formRegister div has the 'error' class.
					formRegister.removeClass('success');
					formRegister.addClass('error');
		
					// Set the message text.
					if (data.responseText !== '') {
						formRegister.text(data.responseText);
						
					} else {
						formRegister.text('Oops! An error occured and your message could not be sent.');
					}
				});
		
			});
		
		});


		/* ------------------------------------------------------------------------ */
		/* Audio
		/* ------------------------------------------------------------------------ */
		$("#jquery_jplayer_1").jPlayer({
        ready: function() {
          $(this).jPlayer("setMedia", {
            mp3: "www.example.com/demo.mp3"
          }).jPlayer("play");
          var click = document.ontouchstart === undefined ? 'click' : 'touchstart';
          var kickoff = function () {
            $("#jquery_jplayer_1").jPlayer("play");
            document.documentElement.removeEventListener(click, kickoff, true);
          };
          document.documentElement.addEventListener(click, kickoff, true);
        },
        swfPath: "/js",
        loop: true,
        });


		/* ------------------------------------------------------------------------ */
		/* PageLoader
		/* ------------------------------------------------------------------------ */
        // Wait for window load
		$(window).load(function() {
		    // Animate loader off screen
		    $(".page-loader").fadeOut("slow");
		});


		/* ------------------------------------------------------------------------ */
		/* Wow
		/* ------------------------------------------------------------------------ */
		new WOW().init();
