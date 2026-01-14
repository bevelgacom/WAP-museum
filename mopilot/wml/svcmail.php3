<?xml version = "1.0"?><!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>
<card id="info" title="error">
	<do type="prev" label="back"><prev/></do>
		<p align="center">
    	please fill out the form properly:<br/>
    	specify your suggestion or issue!    	</p>
    <p align="left">
		<a title="next" href="#feedback">next</a>
    </p>
</card>
<card id="feedback" title="feedback"> 
	<onevent type="onenterforward">
		<refresh>
		<setvar name="fm" value=""/>
		<setvar name="co" value=""/>
		<setvar name="cm" value=""/>
		<setvar name="sp" value=""/>
		<setvar name="dv" value=""/>
		</refresh>
	</onevent>

    <do type="prev" label="back"><prev/></do>

    <p align="center"><img src="images/mopilot.wbmp" alt="mopilot.com"/></p>
    <p align="center"><small>service report</small></p> 
    <p>We need your help! In case you are having problems, please submit this
	service report. Additional information can be found on http://mopilot.com<br/>
	Thank you!<br/>
	</p>

	<p>phone/model&nbsp; <input name="dv" format="*m"/></p>
	<p>your provider&nbsp; <input name="sp" format="*m"/></p>
	<p>country&nbsp; <input name="co" format="*m" emptyok="true"/></p>
	<p>your email&nbsp; <input name="fm" format="*m"/></p>
	<p>problem&nbsp; <input name="cm" format="*m"/></p>

	<p align="center">
		<anchor>send report
		<go href="svcmail.php3" method="post">
			<postfield name="fm" value="$(fm:E)"/>
			<postfield name="co" value="$(co:E)"/>
			<postfield name="cm" value="$(cm:E)"/>
			<postfield name="dv" value="$(dv:E)"/>
			<postfield name="sp" value="$(sp:E)"/>
		</go></anchor>
	</p>

    <p align="left">
      <small>&#169; 1999-2003 MoPilot.com</small>
    </p>
</card>
</wml>
