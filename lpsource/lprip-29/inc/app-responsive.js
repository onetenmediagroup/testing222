$(function() {
	
	// setTimeout ( function () {
	// 	var sidebarMarginTop = $('.pHeader').outerHeight(true);
	// 	$('#rightCol').css({"marginTop" : sidebarMarginTop});
	// 	// console.log(sidebarMarginTop);
	//  }, 2);


	var numberOfComments = $('.commentsList ul li').length;
	// console.log(numberOfComments);
	$('.numberOfComments').text(numberOfComments);


	/*================================================
	=            Users online definitions            =
	================================================*/
	var startOnlineUsersNumber = 70;
	var minUsersOnline = 190;
	var maxUsersOnline = 255;
	var userOnlineRefreshRate = 2; //in seconds
	
	
	/*=====  End of Users online definitions  ======*/

	/*==========================================
	=            Users online logic            =
	==========================================*/

	var currentUserOnline = 74;
	var randomNumberCounter = 0;
	var randomNumberNegativeCounter = 0;

	$('.uoContent span').text(currentUserOnline);

	function getRandomNumber(min, max) {
	    return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	setInterval(function(){ 
		currentUserOnline += getRandomNumber(10,20);
		randomNumberCounter++;

		if(currentUserOnline <= minUsersOnline){
			currentUserOnline += getRandomNumber(10,20);
			randomNumberNegativeCounter = 0;
			randomNumberCounter++;
		}

		switch (randomNumberCounter) {
		    case 3:
		        currentUserOnline -= 20;
		        break;
		    case 5:
		        currentUserOnline -= 20;
		        break;
		    case 9:
		        currentUserOnline -= 20;
		        
		        break;
		}

		if(currentUserOnline >= maxUsersOnline){
			randomNumberCounter = 0;
			currentUserOnline -= getRandomNumber(20,40);
			randomNumberNegativeCounter++;
		}

		switch (randomNumberNegativeCounter) {
		    case 1:
		        currentUserOnline -= getRandomNumber(20,40);
		        break;
		    case 2:
		        currentUserOnline -= getRandomNumber(10,30);
		        break;
		    case 3:
		        currentUserOnline -= getRandomNumber(10,20);
		        break;
		}

		$('.uoContent span').text(currentUserOnline);
		// console.log("--");
	}, userOnlineRefreshRate * 1000);

	// console.log(getRandomNumber(20,50));


	
	
	/*=====  End of Users online logic  ======*/


	/*=================================================
	=            Notifications definitions            =
	=================================================*/

		/*====================================
		=            TRIAL 1 INFO            =
		====================================*/
		
		var name1 = [
			["Carole Barnes", "Fresno", "3"],
			["Jannie Manders", "Toledo", "6"],
			["Nicole Jackson", "Reno", "2"],
			["Karen Davis", "New York", "7"],
			["Shelley Collins", "Dallas", "5"],
			["Diane Hawley", "Fort Worth", "8"],
			["Alice Caldwell", "New York", "4"],
			["Richard Moore", "San Jose", "1"],
			["Susan Smith", "New York", "9"],
		];

		
		/* Edit time sequences here in seconds */

		var timeSequencePurchase1 = [0, 26, 59, 38, 12, 28, 36, 22, 49];
		// var timeSequencePurchase1 = [3,10];

		/* Trials numbers */
		var maxTrials1 = 10;
		var minTrials1 = 2;
		
		/*=====  End of TRIAL 1 INFO  ======*/

	/*=====  End of Notifications definitions  ======*/



	/*===========================================
	=            Notifications Logic            =
	===========================================*/

	function randomNoRepeats(array) {
		  var copy = array.slice(0);
		  return function() {
		    if (copy.length < 1) { copy = array.slice(0); }
		    var index = Math.floor(Math.random() * copy.length);
		    var item = copy[index];
		    copy.splice(index, 1);
		    return item;
		  };
		}

		var chooser = randomNoRepeats(name1);


	var n1, n2, notif1Forever = true, notif2Forever = true;

		/*===============================
		=            Trial 1            =
		===============================*/

		var tempMinTrials1 = minTrials1 + 1;
		
		var trialsLeft1 = maxTrials1 - tempMinTrials1;
		
		var trialsCounter1 = 0;


		function displayNotification1(timeSequence1) {
			
		    var i1 = 0;

		    displayNextNotif1();
		    function displayNextNotif1() {

		    	

		    	

		        if (i1 < timeSequence1.length) {
		            var value1 = timeSequence1[i1];

		            if(i1>0){
		            	$('.trial1 .trialWrappAll > .trialOffer .noOfTrials').animate({color: "#ff0000"}, 150 , function(){
							$(this).animate({color: "#383838"}, 150 , function(){
								$(this).animate({color: "#ff0000"}, 150 , function(){
									$(this).animate({color: "#383838"}, 150 , function(){
										$(this).animate({color: "#ff0000"}, 150 , function(){
											$(this).animate({color: "#383838"}, 150 , function(){
												$(this).animate({color: "#ff0000"}, 150 , function(){
													$(this).animate({color: "#383838"}, 150 , function(){
														$(this).animate({color: "#ff0000"}, 150 , function(){
															$(this).animate({color: "#383838"}, 150, function(){
																$('.trial1 .trialWrappAll > .trialOffer .noOfTrials').removeClass('animated wobble');
																$('.trial1 .trialWrappAll > .trialButton a').removeClass('animated pulse');
															});
														});	
													});		
												});	
											});				
										});	
									});		
								});	
							});
						});
			   			$('.trial1 .trialWrappAll > .trialButton a').addClass('animated pulse');
		            }
		            
		            
		            var duration1 = value1 * 1000;

		            if(trialsCounter1 <= (trialsLeft1)){

	   					// var item1 = name1[Math.floor(Math.random()*name1.length)];

	   					var item1 = chooser();

	   					$.noty.closeAll();


	   					if(i1>0){
	   						showTrial1(item1[0], item1[1], item1[2], duration1);
	   					}
			    		

			    		if(trialsCounter1 >= trialsLeft1){
			    			notif1Forever = false;
			    		}
			    		
			    		
			    		
	   				}else{
	   					return( false );
	   				}



		            // $('.notifWrap').addClass('animated flipInX').show();



		            i1++;

		            setTimeout(displayNextNotif1, duration1);
		        }
		    }
		}


		displayNotification1(timeSequencePurchase1);

		$('.trial1 .trialWrappAll > .trialOffer .noOfTrials').text(maxTrials1 - trialsCounter1);
		function showTrial1(name, city, timeago, duration) {
				trialsCounter1++;
				$('.trial1 .trialWrappAll > .trialOffer .noOfTrials').text(maxTrials1 - trialsCounter1);
				if(!notif1Forever){
					duration = false;
				}
			   	
			   	n1 = noty({
			   		
				layout: 'bottomRight',
				theme: 'relax',
				dismissQueue : false,
				maxVisible: 1,
				text: '<span class="forceNewLine notifuserinfo">' + name + '</span> <span class="forceNewLine">from ' + city + '</span> <span class="dash">-</span> <span class="forceNewLine timeagonotif">' + timeago + ' seconds ago</span>',
				template: '<div class="noty_message"><b><span class="mro">Most</span> Recent Order:</b><span class="noty_text"></span></div>',
				animation   : {
	                open  : 'animated flipInX',
	                close : 'animated flipOutX',
	                easing: 'swing',
	                speed : 500
	            },
				timeout: duration,
				maxVisible: 1, // you can set max visible notification for dismissQueue true option,
    			killer: false, // for close all notifications before show
    			callback: {
			        onShow: function() {
			   //      	$('.trial1 > .trialOffer .noOfTrials').animate({color: "#ff0000"}, 150 , function(){
						// 	$(this).animate({color: "#383838"}, 150 , function(){
						// 		$(this).animate({color: "#ff0000"}, 150 , function(){
						// 			$(this).animate({color: "#383838"}, 150 , function(){
						// 				$(this).animate({color: "#ff0000"}, 150 , function(){
						// 					$(this).animate({color: "#383838"}, 150 , function(){
						// 						$(this).animate({color: "#ff0000"}, 150 , function(){
						// 							$(this).animate({color: "#383838"}, 150 , function(){
						// 								$(this).animate({color: "#ff0000"}, 150 , function(){
						// 									$(this).animate({color: "#383838"}, 150, function(){
						// 										$('.trial1 > .trialOffer .noOfTrials').removeClass('animated wobble');
						// 										$('.trial1 > .trialButton a').removeClass('animated pulse');
						// 									});
						// 								});	
						// 							});		
						// 						});	
						// 					});				
						// 				});	
						// 			});		
						// 		});	
						// 	});
						// });
			   // 			$('.trial1 > .trialButton a').addClass('animated pulse');
						// $('.trial1 > .trialOffer .noOfTrials').text(maxTrials1 - trialsCounter1);
			        }
			      
			    },
			});

		}
		
		/*=====  End of Trial 1  ======*/


	
	/*======================================
	=            Yesterday date            =
	======================================*/

	function formatDate(date) {
		var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
		var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
	  	var hours = date.getHours();
	  	var minutes = date.getMinutes();
	  	var ampm = hours >= 12 ? 'PM' : 'AM';
	  	hours = hours % 12;
	  	hours = hours ? hours : 12; // the hour '0' should be '12'
	  	minutes = minutes < 10 ? '0'+minutes : minutes;
	  	var strTime = (hours) + ':' + (minutes) + ' ' + ampm;
	  	// return date.getMonth()+1 + "/" + date.getDate() + "/" + date.getFullYear() + "  " + strTime;
	  	return days[date.getDay()-1] + ", " + months[date.getMonth()] + " " + (date.getDate()-1) + ", " + date.getFullYear() + " " + strTime;
	}

	var newDate = new Date();
	var yesterdayDate = formatDate(newDate);

	$('.postTime').text(yesterdayDate);

	
	
	/*=====  End of Yesterday date  ======*/


	/*==================================
	=            Today Date            =
	==================================*/
	
	function today(date) {
		var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
		var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
	  	var hours = date.getHours();
	  	var minutes = date.getMinutes();
	  	var ampm = hours >= 12 ? 'PM' : 'AM';
	  	hours = hours % 12;
	  	hours = hours ? hours : 12; // the hour '0' should be '12'
	  	minutes = minutes < 10 ? '0'+minutes : minutes;
	  	var strTime = (hours) + ':' + (minutes) + ' ' + ampm;
	  	// return date.getMonth()+1 + "/" + date.getDate() + "/" + date.getFullYear() + "  " + strTime;
	  	return days[date.getDay()] + ", " + months[date.getMonth()] + " " + (date.getDate()) + ", " + date.getFullYear();
	}

	var todayVar = new Date();
	var todayDate = today(todayVar);

	$('.postTimeToday').text(todayDate);
	
	
	/*=====  End of Today Date  ======*/
	
	
	

	
	
	
	


	
});