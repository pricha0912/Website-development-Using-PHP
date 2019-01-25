<!doctype html>
<html lang="en">
<head>
<title>GoodWind - Overseas Education Consultant</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.html">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.wjs"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="css/wreset.css" type="text/css" />
	<link rel="stylesheet" href="css/wstyle.css" type="text/css" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/wresponsive-leyouts.css" type="text/css" />
    
    
    <!-- iosslider -->
	<link rel = "stylesheet" media = "screen" href = "wjs/iosslider/common.css" />
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="wjs/jcarousel/skin.css" />
    
    <!-- faqs -->
    <link rel="stylesheet" href="wjs/accordion/accordion.css" type="text/css" media="all">
	<link rel="stylesheet" href="js/form/sky-forms.css" type="text/css" media="all">
<script src="slider/js/jquery-v1.8.2.js"></script> <!-- jQuery 1.8.2 -->
<style type="text/css">

a.readmore_02 {
    float: left;
    padding: 9px 18px 9px 18px;
    margin: 40px 0px 0px 300px;
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    color: #fff;
    font-weight: 600;
    background-color: #29B2FE;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border-bottom: 1px solid #29B2FE;
}

.containergood{
position: relative;
width: 180px; /*marquee width */
height: 100px; /*marquee height */
overflow: hidden;
background-color: white;

padding: 2px;
padding-left: 0px;

}

</style>

<script type="text/javascript">

var zxcMarquee={

 init:function(o){
  var mde=o.Mode,mde=typeof(mde)=='string'&&mde.charAt(0).toUpperCase()=='H'?['left','offsetWidth','top','width']:['top','offsetHeight','left','height'],id=o.ID,srt=o.StartDelay,ud=o.StartDirection,p=document.getElementById(id),obj=p.getElementsByTagName('DIV')[0],sz=obj[mde[1]],clone;
  p.style.overflow='hidden';
  obj.style.position='absolute';
  obj.style[mde[0]]='0px';
  obj.style[mde[3]]=sz+'px';
  clone=obj.cloneNode(true);
  clone.style[mde[0]]=sz+'px';
  clone.style[mde[2]]='0px';
  obj.appendChild(clone);
  o=this['zxc'+id]={
   obj:obj,
   mde:mde[0],
   sz:sz
  }
  if (typeof(srt)=='number'){
   o.dly=setTimeout(function(){ zxcMarquee.scroll(id,typeof(ud)=='number'?ud:-1); },srt);
  }
  else {
   this.scroll(id,0)
  }
 },

 scroll:function(id,ud){
  var oop=this,o=this['zxc'+id],p;
  if (o){
   ud=typeof(ud)=='number'?ud:0;
   clearTimeout(o.dly);
   p=parseInt(o.obj.style[o.mde])+ud;
   if ((ud>0&&p>0)||(ud<0&&p<-o.sz)){
    p+=o.sz*(ud>0?-1:1);
   }
   o.obj.style[o.mde]=p+'px';
   o.dly=setTimeout(function(){ oop.scroll(id,ud); },50);
  }
 }
}

function init(){

 zxcMarquee.init({
  ID:'marquee1',     // the unique ID name of the parent DIV.                        (string)
  Mode:'Vertical',   //(optional) the mode of execution, 'Vertical' or 'Horizontal'. (string, default = 'Vertical')
  StartDelay:2000,   //(optional) the auto start delay in milli seconds'.            (number, default = no auto start)
  StartDirection:-1  //(optional) the auto start scroll direction'.                  (number, default = -1)
 });

 zxcMarquee.init({
  ID:'marquee2',     // the unique ID name of the parent DIV.                        (string)
  Mode:'Horizontal', //(optional) the mode of execution, 'Vertical' or 'Horizontal'. (string, default = 'Vertical')
  StartDelay:2000,   //(optional) the auto start delay in milli seconds'.            (number, default = no auto start)
  StartDirection:-1  //(optional) the auto start scroll direction'.                  (number, default = -1)
 });

}

if (window.addEventListener)
 window.addEventListener("load", init, false)
else if (window.attachEvent)
 window.attachEvent("onload", init)
else if (document.getElementById)
 window.onload=init


</script>
    
    <title>Loan On Click</title>
	

    <!-- Custom styles for the demo page -->
    

</head>
<body>

<div class="site_wrapper">
   

<!-- HEADER -->


<header id="header">

	<!-- Top header bar -->
	<div id="trueHeader">
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="one_fourth"><a href="index.html" id="logo"></a></div>
		
        <!-- Menu -->
        <div class="three_fourth last">
           
           <nav id="access" class="access" role="navigation">
           
            <div id="menu" class="menu">
                
                <ul id="tiny">
                
                   <!-- <li><a href="index.html" class="active">Home</a></li>  -->
                    
                   
                    
                   <!-- <li><a href="personal.html">Personal Loan</a>
                       <ul>
					     
						   <li><a href="personal.html">Personal Loan</a></li>
						    <li><a href="business.html">Business Loan</a></li>
							<li><a href="professional.html">Loan for Professionals</a></li>
					   </ul>
                      
                        
                    </li>
                    
                    <li><a href="credit.html">Credit Card</a>
                    
                                            
                    </li>
  
                                      
                    <li><a href="car.html">Car Loan</a>
                      <ul>
                            <li><a href="car.html">New Car Loan</a></li>
                            <li><a href="car.html">Used Car Loan</a></li>
                        </ul> 
                       
                    </li>
					 <li><a href="home.html">Home Loan</a>
                     <ul>
                            <li><a href="home.html">New Home Loan</a></li>
                            <li><a href="home.html">Loan Against Property</a></li>
                        </ul> 
                       
                    </li>
					
                    <li ><a href="project.html">Project Loan</a>
					<ul>
                    <li ><a href="foreign.html">Foreign Funding</a></li>
					</ul>
                    </li>
					<li class="last"><a href="contact.html"> Contact Us</a></li>
				<!--	<li class="lineheight">
            <a class="initialism basic_open btn btn-success" href="#">EMI Calculator</a>
            
        </li>-->
                </ul>
                
            </div>
            
        </nav><!-- end nav menu -->
      
        </div>
        
        
		</div>
		
	</div>
    
	</div>
    
</header><!-- end header -->
   

<div class="clearfix"></div>
-->

<!-- Contant
======================================= -->

<div class="container">

	<div class="content_fullwidth">
       
    <div class="form_new">
        

    
    <h3><i>Inuiry Form</i></h3>
	<br/><br/>
	
<form action="prove.php" method="post" id="sky-form" class="sky-form">


				<section> 
				    <label class="label"><strong>How much loan amount you require ?</br></br></strong></label>
				    <label class="select"> <i class="icon-append icon-tag"></i>
						<select name="loanamount" >
							<option value="" selected>-- Select Loan Amount --</option>
							<option value="1 Lac" >1 Lac</option>
							<option value="2 Lacs">2 Lacs</option>
							<option value="3 Lacs">3 Lacs</option>
							<option value="5 Lacs">5 Lacs</option>
							<option value="10 Lacs">10 Lacs</option>
							<option value="otheramount">Other Amount</option>
						</select>
					</label>
					<div id="otheramt"></br>
						<p>Please Specify:
							<label id="Other-Amount">
								<input name="OtherAmount" type="text" placeholder="Other Amount" size="10" />
							</label>
						</p>
					</div>	 
				</section>
				
			<hr width="45%" ></hr><br/>
			
				<section> 
				    <label class="label"><strong>How long you want to borrow ?</br></br></strong></label>
				    <label class="select"> <i class="icon-append icon-tag"></i>
						<select name="loanyear" >
							<option value="" selected>-- Select Tenture Years --</option>
							<option value="1 Year" >1 Year</option>
							<option value="2 Years">2 Years</option>
							<option value="3 Years">3 Years</option>
							<option value="5 Years">5 Years</option>
							<option value="10 Years">10 Years</option>
							<option value="otheryear">Other Years</option>
						</select>
					</label>
					<div id="otheryr"></br>
						<p>Please Specify:
							<label id="Other-Year">
								<input name="OtherYear" type="text" placeholder="Other Years" size="10" />
							</label>
						</p>
					</div>	 
				</section>
				
			<hr width="45%" ></hr><br/>
			
				<section> 
				    <label class="label"><strong>Your Current City ?</br></br></strong></label>
				    <label class="select"> <i class="icon-append icon-tag"></i>
						<select name="currentcity" >
							<option value="" selected>-- Select Current City --</option>
							<option value="Delhi" >Delhi</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Kolkatta">Kolkatta</option>
							<option value="Chennai">Chennai</option>
							
							<option value="othercity">Other City</option>
						</select>
					</label>
					<div id="othercty"></br>
						<p>Please Specify:
							<label id="Other-City">
								<input name="OtherCity" type="text" placeholder="Other City" size="10" />
							</label>
						</p>
					</div>	 
				</section>
				
			<hr width="45%" ></hr><br/>
			
				<section> 
				    <label class="label"><strong>Your Occupation ?</br></br></strong></label>
				    <label class="select"> <i class="icon-append icon-tag"></i>
						<select name="occupation" >
							<option value="" selected>-- Select Occupation --</option>
							<option value="salaried" >Salaried</option>
							<option value="SEP">Self Employed Professional</option>
							<option value="SEB">Self Employed Business</option>
							
						</select>
					</label>
					
					
					<div id="salaried"></br><hr width="45%" ></hr><br/>
						<section >
						<label class="label">Employer Name &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="employername">
								<input name="employername1" type="text" placeholder="Employer Name" size="48%" />
							</label>
						
						</section>
						<section>
						<label class="label">Net Monthly Income &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="netmonthlyincome1">
								<input name="netmonthlyincome" type="text" placeholder="Net Monthly Income" size="48%" />
							</label>
						
						</section>
						<section >
						<label class="label">Total EMI You pay currently &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="currentemi1">
								<input name="emi" type="text" placeholder="Total EMI You pay currently" size="48%" />
							</label>
						
						</section>
						<section >
						 <label class="label">Have you taken any loan in past ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="loan" >
							<option value="" selected>-- Please Select --</option>
							<option value="Yes" >Yes</option>
							<option value="No">No</option>
							
						</select>
						</label>
						</section>
						<section >
						 <label class="label">Do you have any Credit Card ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="cc" >
							<option value="" selected>-- Please Select --</option>
							<option value="Yes" >Yes</option>
							<option value="No">No</option>
							
						</select>
						</label>
						</section>
						<section >
						 <label class="label">Your Salary Account is with Bank ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="account" >
							<option value="" selected>-- Please Select --</option>
							<option value="HDFC" >HDFC</option>
							<option value="ICICI">ICICI</option>
							<option value="SBI">SBI</option>
							<option value="Axis">Axis</option>
							<option value="Bank of Baroda">Bank of Baroda</option>
							<option value="Bank of India">Bank of India</option>
							<option value="Cash Or Cheque">Cash OR Cheque</option>
							<option value="otherbank">Other Bank</option>
							
						</select>
						</label>
						</section>
						<section >
						<label class="label">Full Name&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="fullname1">
								<input name="name" type="text" placeholder="FirstName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MiddleName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LastName" size="48%" />
							</label>
						
						</section>
						<section >
						 <label class="label">Gender ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="gender" >
							<option value="" selected>-- Please Select --</option>
							<option value="Male" >Male</option>
							<option value="Female">Female</option>
							
						</select>
						</label>
						</section>
						<section>
						<label class="label">Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="dob1">
								<input name="dateofbirth" type="date" placeholder="Date of Birth" size="48%" />
							</label>
						
						</section>
						<section >
						<label class="label">Email Address</label>
							<label id="emailid1">
								<input name="eid" type="email" placeholder="Email Address" size="48%" />
							</label>
						
						</section>
						<section>
						<label class="label">Phone Number</label>
							<label id="phonenumber1">
								<input name="phone" type="text" placeholder="Phone Number" size="48%" />
							</label>
						
						</section>
					</div>	 
					
					
					<div id="SEP"></br><hr width="45%" ></hr><br/>
						<section >
						
						 <label class="label">Select Your Profession Type</label>
						<label class="select1"> <i class="icon-append icon-tag"></i>
						<select name="pprofessiontype" >
							<option value="" selected>-- Please Select --</option>
							<option value="Architect" >Architect (B.Arch)</option>
                            <option value="Chartered Accountant" >Chartered Accountant</option>
                            <option value="Company Secretary" >Company Secretary</option>
                            <option value="Consultant" >Consultant</option>
                            <option value="Cost Accountant" >Cost Accountant</option>
                            <option value="Dentist" >Dentist</option>
                            <option value="Doctor" >Doctor</option>
                            <option value="Engineer (B.Tech / B.E)" >Engineer (B.Tech / B.E)</option>
                            <option value="Lawyer" >Lawyer</option>
                            <option value="MBA" >MBA</option>
                            <option value="Others" >Others</option>

							
						</select>
						</label>
						
						</section>
						
						<section >
						<label class="label">Gross Annual Income &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="annualincome1">
								<input name="income" type="text" placeholder="Gross Annual income" size="48%" />
							</label>
						
						</section>
						<br/></br><br/></br>
						<section >
						<label class="label">Total Annual TurnOver &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="annualturnover">
								<input name="turnover" type="text" placeholder="Total Annual TurnOver" size="48%" />
							</label>
						
						</section>
						<section >
						<label class="label">Total EMI You pay currently &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="currentemi1">
								<input name="pcurrentemi" type="text" placeholder="Total EMI You pay currently" size="48%" />
							</label>
						
						</section>
						<section >
						 <label class="label">Have you taken any loan in past ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="ploaninpast" >
							<option value="" selected>-- Please Select --</option>
							<option value="Yes" >Yes</option>
							<option value="No">No</option>
							
						</select>
						</label>
						</section>
						<section >
						 <label class="label">Do you have any Credit Card ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="pcreditcard" >
							<option value="" selected>-- Please Select --</option>
							<option value="Yes" >Yes</option>
							<option value="No">No</option>
							
						</select>
						</label>
						</section>
						<section >
						 <label class="label">Your Bank Account is with  ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="psalaryaccount" >
							<option value="" selected>-- Please Select --</option>
							<option value="HDFC" >HDFC</option>
							<option value="ICICI">ICICI</option>
							<option value="SBI">SBI</option>
							<option value="Axis">Axis</option>
							<option value="Bank of Baroda">Bank of Baroda</option>
							<option value="Bank of India">Bank of India</option>
							<option value="Cash Or Cheque">Cash OR Cheque</option>
							<option value="otherbank">Other Bank</option>
							
						</select>
						</label>
						</section>
						<section >
						<label class="label">Full Name&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="fullname">
								<input name="pfullname" type="text" placeholder="FirstName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MiddleName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LastName" size="48%" />
							</label>
						
						</section>
						<section >
						 <label class="label">Gender ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="pgender" >
							<option value="" selected>-- Please Select --</option>
							<option value="Male" >Male</option>
							<option value="Female">Female</option>
							
						</select>
						</label>
						</section>
						<section>
						<label class="label">Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="dob">
								<input name="pdob" type="date" placeholder="Date of Birth" size="48%" />
							</label>
						
						</section>
						<section >
						<label class="label">Email Address</label>
							<label id="emailid">
								<input name="pemailid" type="email" placeholder="Email Address" size="48%" />
							</label>
						
						</section>
						<section>
						<label class="label">Phone Number</label>
							<label id="phonenumber">
								<input name="pphonenumber" type="text" placeholder="Phone Number" size="48%" />
							</label>
						
						</section>
					</div>	 
					<div id="SEB"></br><hr width="45%" ></hr><br/>
						<section>
						
						 <label class="label">Select Your Profession Type</label>
						<label class="select1"> <i class="icon-append icon-tag"></i>
						<select name="bprofessiontype" >
							<option value="" selected>-- Please Select --</option>
							 <option value="Proprietor" >Proprietor</option>
                             <option value="Partnership Firm" >Partnership Firm</option>
                             <option value="Pvt Ltd Company" >Pvt Ltd company</option>
                             <option value="Director applying as an Individual" >Director applying as an Individual</option>
                             <option value="Partner applying as an Individual" >Partner applying as an Individual</option>
							 <option value="Others - Business" >Others - Business</option>


							
						</select>
						</label>
						
						</section>
						
						<section>
						<label class="label">Gross Annual Income &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="annualincome">
								<input name="bannualincome" type="text" placeholder="Gross Annual income" size="48%" />
							</label>
						
						</section>
						<br/></br><br/></br>
						<section >
						<label class="label">Total Annual TurnOver &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="annualturnover">
								<input name="bannualturnover" type="text" placeholder="Total Annual TurnOver" size="48%" />
							</label>
						
						</section>
						<section >
						<label class="label">Total EMI You pay currently &nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="currentemi">
								<input name="bcurrentemi" type="text" placeholder="Total EMI You pay currently" size="48%" />
							</label>
						
						</section>
						<section >
						 <label class="label">Have you taken any loan in past ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="bloaninpast" >
							<option value="" selected>-- Please Select --</option>
							<option value="Yes" >Yes</option>
							<option value="No">No</option>
							
						</select>
						</label>
						</section>
						<section >
						 <label class="label">Do you have any Credit Card ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="bcreditcard" >
							<option value="" selected>-- Please Select --</option>
							<option value="Yes" >Yes</option>
							<option value="No">No</option>
							
						</select>
						</label>
						</section>
						<section >
						 <label class="label">Your Bank Account is with  ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="bsalaryaccount" >
							<option value="" selected>-- Please Select --</option>
							<option value="HDFC" >HDFC</option>
							<option value="ICICI">ICICI</option>
							<option value="SBI">SBI</option>
							<option value="Axis">Axis</option>
							<option value="Bank of Baroda">Bank of Baroda</option>
							<option value="Bank of India">Bank of India</option>
							<option value="Cash Or Cheque">Cash OR Cheque</option>
							<option value="otherbank">Other Bank</option>
							
						</select>
						</label>
						</section>
						<section >
						<label class="label">Full Name&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="fullname">
								<input name="bfullname" type="text" placeholder="FirstName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MiddleName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LastName" size="48%" />
							</label>
						
						</section>
						<section >
						 <label class="label">Gender ?</label>
						<label class="select"> <i class="icon-append icon-tag"></i>
						<select name="bgender" >
							<option value="" selected>-- Please Select --</option>
							<option value="Male" >Male</option>
							<option value="Female">Female</option>
							
						</select>
						</label>
						</section>
						<section>
						<label class="label">Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label id="dob">
								<input name="bdob" type="date" placeholder="Date of Birth" size="48%" />
							</label>
						
						</section>
						<section >
						<label class="label">Email Address</label>
							<label id="emailid">
								<input name="bemailid" type="email" placeholder="Email Address" size="48%" />
							</label>
						
						</section>
						<section >
						<label class="label">Phone Number</label>
							<label id="phonenumber">
								<input name="bphonenumber" type="text" placeholder="Phone Number" size="48%" />
							</label>
						
						</section>
					</div>	 
				</section>
				
			<hr width="45%" ></hr><br/>
			
			  <input type="checkbox" name="checkbox" id="checkbox" required> &nbsp; &nbsp; &nbsp;I authorize LoanonClick to call/SMS/email me <br>about its products. I have accepted the terms of the <br>privacy policy. I am aware that credit approval is at <br>the sole discretion of the bank.
<style>
#otheramt {
    display:none;
}
#otheryr {
    display:none;
}
#othercty {
    display:none;
}
#salaried {
    display:none;
}
#SEP {
    display:none;
}
#SEB {
    display:none;
}
</style>
			<script>
	$('select[name=loanamount]').change(function () {
    if ($(this).val() == 'otheramount') {
        $('#otheramt').show();
    } else {
        $('#otheramt').hide();
    }
	});

	$('select[name=loanyear]').change(function () {
    if ($(this).val() == 'otheryear') {
        $('#otheryr').show();
    } else {
        $('#otheryr').hide();
    }
	});
	
	$('select[name=currentcity]').change(function () {
    if ($(this).val() == 'othercity') {
        $('#othercty').show();
    } else {
        $('#othercty').hide();
    }
	});
	
	$('select[name=occupation]').change(function () {
    if ($(this).val() == 'salaried') {
        $('#salaried').show();
    } else {
        $('#salaried').hide();
    }
	});
	
	$('select[name=occupation]').change(function () {
    if ($(this).val() == 'SEP') {
        $('#SEP').show();
    } else {
        $('#SEP').hide();
    }
	});
	
	$('select[name=occupation]').change(function () {
    if ($(this).val() == 'SEB') {
        $('#SEB').show();
    } else {
        $('#SEB').hide();
    }
	});
</script>
	
  <footer>
            <button type="submit" class="button">Send message</button>
          </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>Your message was successfully sent!</p>
          </div>
      <br/><br/><br/>
</form>
   
    
    </div>
               
    
            
</div>

</div><!-- end content area -->



<div class="clearfix"></div>

<!-- Footer
======================================= -->

<div id="footer">


 	
    
	<div class="copyright_info">
    
    	<div class="container">
        
    	<div class="one_half"><b>Copyright © 2017 GoodWind Education All rights reserved</b></div>
		
        <div class="one_half last">
        	<span><a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a></span>
                    
        </div>
        
		</div>
        
    </div><!-- end copyright info -->  

</div><!-- end copyright info -->


</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

<!-- tabs script -->
<script type="text/javascript" src="js/tabs/tabs.js"></script>

<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>

<!-- jquery jcarousel -->
<script type="text/javascript">

	jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouseltwo').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouselthree').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouselfour').jcarousel();
	});
	
</script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript">

	var tpj=jQuery;
	tpj.noConflict();

	tpj(document).ready(function() {

	if (tpj.fn.cssOriginal!=undefined)
		tpj.fn.css = tpj.fn.cssOriginal;

		var api = tpj('.fullwidthbanner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,

				onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

				thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
				thumbHeight:50,
				thumbAmount:3,

				hideThumbs:200,
				navigationType:"none",				// bullet, thumb, none
				navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

				navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


				navigationHAlign:"center",				// Vertical Align top,center,bottom
				navigationVAlign:"bottom",					// Horizontal Align left,center,right
				navigationHOffset:30,
				navigationVOffset:-40,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:0,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:0,
				soloArrowRightVOffset:0,

				touchenabled:"on",						// Enable Swipe Function : on/off


				stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
				stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

				hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
				hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
				hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


				fullWidth:"on",

				shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

			});

});



</script>

<script type="text/javascript" src="js/sticky-menu/core.js"></script>

<!-- testimonials -->
<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(".controlls li a").click(function(e) {
    e.preventDefault();
    var id = $(this).attr('class');
    $('#slider div:visible').fadeOut(500, function() {
        $('div#' + id).fadeIn();
    })
});
});//]]>  

</script>

</body>
</html>
