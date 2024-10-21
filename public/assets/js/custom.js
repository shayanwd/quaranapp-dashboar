(function($) {
    "use strict";
	
	// ______________Cover Image
	$(".cover-image").each(function() {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});
	
	$('.table-subheader').click(function(){
		$(this).nextUntil('tr.table-subheader').slideToggle(100);
	});
	
	// ______________ Horizonatl
	$(document).ready(function() {
      $("a[data-theme]").click(function() {
        $("head link#theme").attr("href", $(this).data("theme"));
        $(this).toggleClass('active').siblings().removeClass('active');
      });
      $("a[data-effect]").click(function() {
        $("head link#effect").attr("href", $(this).data("effect"));
        $(this).toggleClass('active').siblings().removeClass('active');
      });
    });
	
	
	// ______________Full screen
	$("#fullscreen-button").on("click", function toggleFullScreen() {
      if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
          document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
          document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        } else if (document.documentElement.msRequestFullscreen) {
          document.documentElement.msRequestFullscreen();
        }
      } else {
        if (document.cancelFullScreen) {
          document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
          document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
      }
    })
	
	// ______________Active Class
	$(document).ready(function() {
		$(".horizontalMenu-list li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
		$(".horizontal-megamenu li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); 
				$(this).parent().parent().parent().parent().parent().parent().parent().prev().addClass("active"); 
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
		$(".horizontalMenu-list .sub-menu .sub-menu li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
	});
	
	// ___________TOOLTIP	
	$('[data-toggle="tooltip"]').tooltip();
	// colored tooltip
	$('[data-toggle="tooltip-primary"]').tooltip({
		template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"><\/div><div class="tooltip-inner"><\/div><\/div>'
	});
	$('[data-toggle="tooltip-secondary"]').tooltip({
		template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"><\/div><div class="tooltip-inner"><\/div><\/div>'
	});
	
	// __________POPOVER
	$('[data-toggle="popover"]').popover();
	$('[data-popover-color="head-primary"]').popover({
		template: '<div class="popover popover-head-primary" role="tooltip"><div class="arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	});
	$('[data-popover-color="head-secondary"]').popover({
		template: '<div class="popover popover-head-secondary" role="tooltip"><div class="arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	});
	$('[data-popover-color="primary"]').popover({
		template: '<div class="popover popover-primary" role="tooltip"><div class="arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	});
	$('[data-popover-color="secondary"]').popover({
		template: '<div class="popover popover-secondary" role="tooltip"><div class="arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	});
	$(document).on('click', function(e) {
		$('[data-toggle="popover"],[data-original-title]').each(function() {
			//the 'is' for buttons that trigger popups
			//the 'has' for icons within a button that triggers a popup
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				(($(this).popover('hide').data('bs.popover') || {}).inState || {}).click = false // fix for BS 3.3.6
			}
		});
	});
	
	// __________MODAL
	// showing modal with effect
	$('.modal-effect').on('click', function(e) {
		e.preventDefault();
		var effect = $(this).attr('data-effect');
		$('#modaldemo8').addClass(effect);
	});
	// hide modal with effect
	$('#modaldemo8').on('hidden.bs.modal', function(e) {
		$(this).removeClass(function(index, className) {
			return (className.match(/(^|\s)effect-\S+/g) || []).join(' ');
		});
	});
	
	// ______________ Page Loading
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("slow");
	})

	// ______________Back to top Button
	$(window).on("scroll", function(e) {
    	if ($(this).scrollTop() > 0) {
            $('#back-to-top').fadeIn('slow');
        } else {
            $('#back-to-top').fadeOut('slow');
        }
    });
    $("#back-to-top").on("click", function(e){
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
	
	// ______________ StarRating
	var ratingOptions = {
		selectors: {
			starsSelector: '.rating-stars',
			starSelector: '.rating-star',
			starActiveClass: 'is--active',
			starHoverClass: 'is--hover',
			starNoHoverClass: 'is--no-hover',
			targetFormElementSelector: '.rating-value'
		}
	};
	$(".rating-stars").ratingStars(ratingOptions);
	
	// ______________ Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function() {
			let $this = $(this);

			$this.circleProgress({
			  fill: {
				color: $this.attr('data-color')
			  },
			  size: $this.height(),
			  startAngle: -Math.PI / 4 * 2,
			  emptyFill: '#e5e9f2',
			  lineCap: 'round'
			});
		});
	}
	// ______________ Chart-circle
	if ($('.chart-circle-primary').length) {
		$('.chart-circle-primary').each(function() {
			let $this = $(this);

			$this.circleProgress({
			  fill: {
				color: $this.attr('data-color')
			  },
			  size: $this.height(),
			  startAngle: -Math.PI / 4 * 2,
			  emptyFill: 'rgba(68, 84, 195, 0.4)',
			  lineCap: 'round'
			});
		});
	}
	
	// ______________ Chart-circle
	if ($('.chart-circle-secondary').length) {
		$('.chart-circle-secondary').each(function() {
			let $this = $(this);

			$this.circleProgress({
			  fill: {
				color: $this.attr('data-color')
			  },
			  size: $this.height(),
			  startAngle: -Math.PI / 4 * 2,
			  emptyFill: 'rgba(247, 45, 102, 0.4)',
			  lineCap: 'round'
			});
		});
	}
	
	// ______________ Chart-circle
	if ($('.chart-circle-success').length) {
		$('.chart-circle-success').each(function() {
			let $this = $(this);

			$this.circleProgress({
			  fill: {
				color: $this.attr('data-color')
			  },
			  size: $this.height(),
			  startAngle: -Math.PI / 4 * 2,
			  emptyFill: 'rgba(45, 206, 137, 0.5)',
			  lineCap: 'round'
			});
		});
	}
	
	// ______________ Chart-circle
	if ($('.chart-circle-warning').length) {
		$('.chart-circle-warning').each(function() {
			let $this = $(this);

			$this.circleProgress({
			  fill: {
				color: $this.attr('data-color')
			  },
			  size: $this.height(),
			  startAngle: -Math.PI / 4 * 2,
			  emptyFill: '#e5e9f2',
			  lineCap: 'round'
			});
		});
	}
	
	// ______________ Global Search
	$(document).on("click", "[data-toggle='search']", function(e) {
		var body = $("body");

		if(body.hasClass('search-gone')) {
			body.addClass('search-gone');
			body.removeClass('search-show');
		}else{
			body.removeClass('search-gone');
			body.addClass('search-show');
		}
	});
	var toggleSidebar = function() {
		var w = $(window);
		if(w.outerWidth() <= 1024) {
			$("body").addClass("sidebar-gone");
			$(document).off("click", "body").on("click", "body", function(e) {
				if($(e.target).hasClass('sidebar-show') || $(e.target).hasClass('search-show')) {
					$("body").removeClass("sidebar-show");
					$("body").addClass("sidebar-gone");
					$("body").removeClass("search-show");
				}
			});
		}else{
			$("body").removeClass("sidebar-gone");
		}
	}
	toggleSidebar();
	$(window).resize(toggleSidebar);
	
	const DIV_CARD = 'div.card';
	// ______________ Tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// ______________ Popover
	$('[data-toggle="popover"]').popover({
		html: true
	});
	
	// ______________ Card Remove
	$(document).on('click', '[data-toggle="card-remove"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});
	
	// ______________ Card Collapse
	$(document).on('click', '[data-toggle="card-collapse"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	// ______________ Card Fullscreen
	$(document).on('click', '[data-toggle="card-fullscreen"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	// sparkline1
	$(".sparkline_bar").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4], {
		height: 20,
		type: 'bar',
		colorMap: {
			'7': '#a1a1a1'
		},
		barColor: '#ff5b51'
	});

	// sparkline2
	$(".sparkline_bar1").sparkline([3, 4, 3, 4, 5, 4, 5, 6, 4, 6,], {
		height: 20,
		type: 'bar',
		colorMap: {
			'7': '#c34444'
		},
		barColor: '#44c386'
	});
	
	// sparkline3
	$(".sparkline_bar2").sparkline([3, 4, 3, 4, 5, 4, 5, 6, 4, 6,], {
		height: 20,
		type: 'bar',
		colorMap: {
			'7': '#a1a1a1'
		},
		barColor: '#4454c3'
	});
	
	// ______________ SWITCHER-toggle ______________//
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch10', function () {    
		if (this.checked) {
			$('body').addClass('default-sidebar');
			$('body').removeClass('color-sidebar');
			$('body').removeClass('dark-sidebar');
			localStorage.setItem("default-sidebar", "True");
		}
		else {
			$('body').removeClass('default-sidebar');
			localStorage.setItem("default-sidebar", "false");
		}
	});
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch12', function () {    
		if (this.checked) {
			$('body').addClass('dark-sidebar');
			$('body').removeClass('color-sidebar');
			$('body').removeClass('default-sidebar');
			localStorage.setItem("dark-sidebar", "True");
		}
		else {
			$('body').removeClass('dark-sidebar');
			localStorage.setItem("dark-sidebar", "false");
		}
	});
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch11', function () {    
		if (this.checked) {
			$('body').addClass('color-sidebar');
			$('body').removeClass('default-sidebar');
			$('body').removeClass('dark-sidebar');
			localStorage.setItem("color-sidebar", "True");
		}
		else {
			$('body').removeClass('color-sidebar');
			localStorage.setItem("color-sidebar", "false");
		}
	});
		
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch3', function () {    
		if (this.checked) {
			$('body').addClass('card-radius');
			localStorage.setItem("card-radius", "True");
		}
		else {
			$('body').removeClass('card-radius');
			localStorage.setItem("card-radius", "false");
		}
	});
	
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch4', function () {    
		if (this.checked) {
			$('body').addClass('card-shadow');
			localStorage.setItem("card-shadow", "True");
		}
		else {
			$('body').removeClass('card-shadow');
			localStorage.setItem("card-shadow", "false");
		}
	});
	
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch5', function () {    
		if (this.checked) {
			$('body').addClass('default-body');
			$('body').removeClass('light-dark-body');
			$('body').removeClass('white-body');
			localStorage.setItem("default-body", "True");
		}
		else {
			$('body').removeClass('default-body');
			localStorage.setItem("default-body", "false");
		}
	});
	
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch6', function () {    
		if (this.checked) {
			$('body').addClass('white-body');
			$('body').removeClass('default-body');
			$('body').removeClass('light-dark-body');
			localStorage.setItem("white-body", "True");
		}
		else {
			$('body').removeClass('white-body');
			localStorage.setItem("white-body", "false");
		}
	});
	
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch7', function () {    
		if (this.checked) {
			$('body').addClass('light-dark-body');
			$('body').removeClass('default-body');
			$('body').removeClass('white-body');
			localStorage.setItem("light-dark-body", "True");
		}
		else {
			$('body').removeClass('light-dark-body');
			localStorage.setItem("light-dark-body", "false");
		}
	});
	
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch8', function () {    
		if (this.checked) {
			$('body').addClass('light-mode');
			$('body').removeClass('dark-mode');
			localStorage.setItem("light-mode", "True");
		}
		else {
			$('body').removeClass('light-mode');
			localStorage.setItem("light-mode", "false");
		}
	});
	$(document).on("click", '#myonoffswitch9', function () {    
		if (this.checked) {
			$('body').addClass('dark-mode');
			$('body').removeClass('light-mode');
			localStorage.setItem("dark-mode", "True");
		}
		else {
			$('body').removeClass('dark-mode');
			localStorage.setItem("dark-mode", "false");
		}
	});
	
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch13', function () {    
		if (this.checked) {
			$('body').addClass('default-horizontal');
			$('body').removeClass('color-horizontal');
			$('body').removeClass('dark-horizontal');
			localStorage.setItem("default-horizontal", "True");
		}
		else {
			$('body').removeClass('default-horizontal');
			localStorage.setItem("default-horizontal", "false");
		}
	});
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch14', function () {    
		if (this.checked) {
			$('body').addClass('dark-horizontal');
			$('body').removeClass('color-horizontal');
			$('body').removeClass('default-horizontal');
			localStorage.setItem("dark-horizontal", "True");
		}
		else {
			$('body').removeClass('dark-horizontal');
			localStorage.setItem("dark-horizontal", "false");
		}
	});
	/*Theme Layouts*/
	$(document).on("click", '#myonoffswitch15', function () {    
		if (this.checked) {
			$('body').addClass('color-horizontal');
			$('body').removeClass('default-horizontal');
			$('body').removeClass('dark-horizontal');
			localStorage.setItem("color-horizontal", "True");
		}
		else {
			$('body').removeClass('color-horizontal');
			localStorage.setItem("color-horizontal", "false");
		}
	});


	// Load Azkar
	loadAzkar();
	function loadAzkar(){
		$.ajax({
			url: '/api/azkars', // API endpoint
			method: 'GET', // HTTP method
			dataType: 'json', // Expected data type
			success: function(response) {
				// Check if data is available
				if (response.data && response.data.length > 0) {
					// Iterate over each item in the data array
					$.each(response.data, function(index, item) {
						// Create a new table row
						var newRow = `
							<tr>
								<td class="font-weight-bold">${index + 1}</td>
								<td>${item.title}</td>
								<td class="text-center">${item.description}</td>
								<td><span class="morning">${item.time}</span></td>
							

								<td class="font-weight-bold">
									<button data-toggle="modal" 
											data-target="#azkarDeleteModal"
											data-title="${item.title}"
											data-id="${item.id}">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#bfbb46">
											<path d="M17 4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7V2H17V4ZM9 9V17H11V9H9ZM13 9V17H15V9H13Z"></path>
											</svg>
									</button>
								</td>
							</tr>
						`;
						// Append the new row to the azkarList table
						$('#azkarList').append(newRow);
	
						$('#azkarDeleteModal').on('show.bs.modal', function(event) {
							var button = $(event.relatedTarget);
							var title = button.data('title');
							var id = button.data('id');
		
							var modal = $(this);
							modal.find('#azkarDeleteModal_title').text(title);
							modal.find('#azkarDeleteModal_id').val(id);
						});
						
					});
					

					$("#azkarDeleteModal_deleteBtn").on('click', function() {
						var azkarId = $('#azkarDeleteModal_id').val(); // Get the ID from hidden input
						const btn = $(this);
						btn.prop('disabled', true);

						// Make AJAX request to delete azkar
						$.ajax({
							url: '/api/azkar/' + azkarId, // Assuming the DELETE endpoint is /azkar/{id}
							type: 'DELETE',
							dataType: 'json',
							success: function(response) {
								if (response.success) {
									// Remove the corresponding row from the DOM
									$('button[data-id="' + azkarId + '"]').closest('tr').remove();
				
									$('#azkarDeleteModal').modal('hide');
									btn.prop('disabled', false);
								} else {
									alert('Error: ' + response.message);
								}
							},
							error: function(xhr) {
								// Handle error response
								alert('An error occurred while deleting the azkar.');
							}
						});
					});
	
					$('#azkartable').DataTable({
						language: {
							searchPlaceholder: 'Search...',
							sSearch: '',
							lengthMenu: '_MENU_',
						}
					});
				} else {
					// Handle the case where no data is returned
					$('#azkarList').append('<tr><td colspan="4" class="text-center">No data available</td></tr>');
				}
			},
			error: function(xhr, status, error) {
				// Handle errors here
				console.error('Error fetching data:', error);
				$('#azkarList').append('<tr><td colspan="4" class="text-center">Error fetching data</td></tr>');
			}
		});
	

	}

	//insert azkar
	$("#addAzkar").click(function(event) {
		// Prevent the default form submission
		event.preventDefault();
	
		// Disable the button to prevent multiple submissions
		$(this).addClass('disabled').prop('disabled', true);
	
		// Create a FormData object from the form
		const form = $('#addAzkarSec')[0]; // Get the form element
		const formData = new FormData(form); // Create FormData object from the form
	
		// Make the AJAX request
		$.ajax({
			url: '/api/azkars', // Your API endpoint
			type: 'POST',
			processData: false, // Important for FormData
			contentType: false, // Important for FormData
			data: formData, // Send the FormData object
			success: function(response) {
				// Handle success - show a success message, clear inputs, etc.
				console.log('Azkar added successfully:', response);
				// Optionally clear inputs or do other UI updates here
				$('#addAzkarSec')[0].reset(); // Reset the form
			},
			error: function(jqXHR, textStatus, errorThrown) {
				// Handle error - show an error message, etc.
				console.error('Error adding azkar:', textStatus, errorThrown);
			},
			complete: function() {
				// Re-enable the button after request completion
				$("#addAzkar").removeClass('disabled').prop('disabled', false);
				$("#modaldemo8").click();
				// loadAzkar();
			}
		});
	});
	


	// Load App users // also works on dashboard
	loadAppUsers();

	function loadAppUsers() {
		// Get the search term from the URL
		const urlParams = new URLSearchParams(window.location.search);
		const searchTerm = urlParams.get('q'); // Get the 'q' parameter from the URL
	
		// Build the URL dynamically
		let apiUrl = '/api/users';
		if (searchTerm) {
			apiUrl += `/${encodeURIComponent(searchTerm)}`; // Append search term if it exists
		}
	
		$.ajax({
			url: apiUrl, // Use the dynamically built URL
			method: 'GET', // HTTP method
			dataType: 'json', // Expected data type
			success: function(response) {
				// Clear existing data
				$('#appUsersList').html('');
	
				if (response) {
					if(response.length > 0){

						$.each(response, function(index, user) {
							// Create a new row for each user
							var newRow = `<tr>
								<td class="font-weight-bold">${index + 1}</td>
								<td>${user.fname + " " + user.lname}</td>
								<td>${user.email}</td>
								<td><button class="btn btn-pill btn-success">${user.status}</button></td>
								<td class="font-weight-bold">
									<button data-toggle="modal" 
											data-target="#userDetailsModal"
											data-fname="${user.fname}"
											data-lname="${user.lname}"
											data-email="${user.email}"
											data-phone="${user.phone}">
										<svg id="frame" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<path id="Vector" d="M19.25,5.72C16.94,2.09,13.56,0,10,0A9.682,9.682,0,0,0,4.91,1.49,13.354,13.354,0,0,0,.75,5.72a5.771,5.771,0,0,0,0,5.69c2.31,3.64,5.69,5.72,9.25,5.72a9.682,9.682,0,0,0,5.09-1.49,13.354,13.354,0,0,0,4.16-4.23A5.771,5.771,0,0,0,19.25,5.72ZM10,12.61a4.04,4.04,0,1,1,4.04-4.04A4.035,4.035,0,0,1,10,12.61Z" transform="translate(2 3.43)" fill="#bf8d46"></path>
											<path id="Vector-2" data-name="Vector" d="M2.85,0A2.855,2.855,0,1,0,5.71,2.86,2.857,2.857,0,0,0,2.85,0Z" transform="translate(9.15 9.14)" fill="#bf8d46" opacity="0.5"></path>
											<path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none" opacity="0"></path>
										</svg>
									</button>
								</td>
							</tr>`;
							$('#appUsersList').append(newRow);
						});
		
						// Handle modal data population
						$('#userDetailsModal').on('show.bs.modal', function(event) {
							var button = $(event.relatedTarget);
							var fname = button.data('fname');
							var lname = button.data('lname');
							var email = button.data('email');
							var phone = button.data('phone');
		
							var modal = $(this);
							modal.find('#appUserModelName').text(fname + ' ' + lname);
							modal.find('#appUserModelEmail').text(email);
							modal.find('#appUserModelPhone').text(phone);
						});
		
						// Initialize DataTable after rows are added
						if ($.fn.DataTable.isDataTable('#appUsersTable')) {
							$('#appUsersTable').DataTable().clear().destroy(); // Destroy existing instance
						}
					}
		
					$('#appUsersTable').DataTable({
						language: {
							searchPlaceholder: 'Search...',
							sSearch: '',
							lengthMenu: '_MENU_',
						}
					});
					
				} else {
					$('#appUsersList').append('<tr><td colspan="5" class="text-center">No data available</td></tr>');
				}
			},
			error: function(xhr, status, error) {
				console.error('Error fetching data:', error);
				// $('#appUsersList').append('<tr><td colspan="5" class="text-center">Error fetching data</td></tr>');
			}
		});
	}
	
	
	//settings panel
	$("#settingsFName, #settingsLName, #settingsPhone, #settingsEmail, #settingsOldPassword, #settingsNewPassword, #settingsConfirmNewPassword").on('input', function() {
		$("#settingsSaveBtn").removeClass("disabled");
    });

	// image upload
	$("#userImage").change(function(event) {
		const file = event.target.files[0]; // Get the selected file
	
		if (file) {
			// Check if file size is less than or equal to 5 MB
			const maxSizeInMB = 5;
			const maxSizeInBytes = maxSizeInMB * 1024 * 1024; // Convert to bytes
	
			if (file.size <= maxSizeInBytes) {
				const reader = new FileReader(); // Create a new FileReader object
				
				reader.onload = function(e) {
					$("#settingsSaveBtn").removeClass("disabled");
	
					// Optionally, send the file to the server for temporary storage
					const formData = new FormData();
					formData.append('img', file);
	
					$('#userProfileBtn').text('Uploading Image...');
					$('#userProfileBtn').addClass("disabled");
	
					$.ajax({
						url: '/api/upload-image', // Your upload endpoint
						method: 'POST',
						data: formData,
						contentType: false,
						processData: false,
						success: function(response) {
							const tempPath = response.tempPath;
							console.log('Temporary image path:', tempPath);

							$('#userProfileBtn').text('Change Image');
							$('#userProfileBtn').removeClass("disabled");
							
							$('#profileImage').attr('src', '/storage/' + tempPath);
							
							$('#tempImagePath').val(tempPath); // Assuming you have an input with this ID
						},
						
						error: function(xhr) {
							console.error('Upload failed:', xhr.responseText);
						}
					});
				};
	
				reader.readAsDataURL(file); // Read the file as a data URL
			} else {
				alert("File size must be less than or equal to 5 MB.");
				$("#settingsSaveBtn").addClass("disabled"); // Optionally disable the button if the size is too large
			}
		}
	});
	
	
	// update profile
	$("#settingsSaveBtn").click(function() {
		const userId = $("#userId").val();
		let imagePath = $('#profileImage').attr('src'); // Get current image URL
	
		const fname = $('#settingsFName').val();
		const lname = $('#settingsLName').val();
		const phone = $('#settingsPhone').val();
		const email = $('#settingsEmail').val();
		const old_password = $('#settingsOldPassword').val();
		const new_password = $('#settingsNewPassword').val();
		const confirm_new_password = $('#settingsConfirmNewPassword').val();
		
		let data = {};
		if (!imagePath.includes('images/')) {
			data = {
				fname: fname,
				lname: lname,
				phone: phone,
				email: email,
				img: imagePath, // Only send the img if it's from the temp folder, otherwise it'll be null
				old_password: old_password,
				password: new_password,
				password_confirmation: confirm_new_password
			};
		}else{
			data = {
				fname: fname,
				lname: lname,
				phone: phone,
				email: email,
				old_password: old_password,
				password: new_password,
				password_confirmation: confirm_new_password
			};
		}

		const settingsSaveBtn = $(this);
		settingsSaveBtn.addClass("disabled");
		settingsSaveBtn.text('Saving...');
		settingsSaveBtn.addClass("disabled");

	
		// Make the AJAX PUT request with raw JSON
		$.ajax({
			url: `/api/update-profile/${userId}`,
			method: 'PUT',
			contentType: 'application/json',
			data: JSON.stringify(data),
			success: function(response) {
				if (response.status === 'success') {
					alert(response.message);
					if (response.user && response.user.img) {
						const newImagePath = response.user.img;
						$('#profileImage').attr('src', newImagePath);
						$('#sidebarUserProfile').attr('src', newImagePath);
						$('#sidebarUsername').text(data.fname + ' ' + data.lname);

					}
				} else if (response.status === 'error') {
				
					if (response.errors) {
						let errorMessage = 'Update failed:\n';
						const problems = response.errors;
		
					
						for (let key in problems) {
							if (problems.hasOwnProperty(key)) {
								errorMessage += `${problems[key].join(', ')}\n`;
							}
						}
		
						alert(errorMessage);
					} else if (response.message) {
						alert(response.message);
					}
				}

				settingsSaveBtn.text("Save Changes");
			},
			error: function(xhr) {
				alert('An unknown error occurred.');
			}
		});
		
	});


	
})(jQuery);

