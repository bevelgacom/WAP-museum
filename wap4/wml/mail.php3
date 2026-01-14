<?xml version="1.0"?><!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>
<card id="mail" title="wap4.com">
<onevent type="onenterforward">
<refresh>
<setvar name="fm" value=""/>
<setvar name="to" value=""/>
<setvar name="cc" value=""/>
<setvar name="sj" value=""/>
<setvar name="bd" value=""/>
</refresh>
</onevent>
<p align="center">give feedback</p>
<p align="left"><b>From:</b>&nbsp; <input name="fm" format="*m"/></p>
<p><b>To:</b>&nbsp; </p>
<p><b>CC:</b>&nbsp; <input name="cc" format="*m" emptyok="true"/></p>
<p><b>Subject:</b>&nbsp; </p>
<p><b>Text:</b>&nbsp; <input name="bd" format="*m" emptyok="true" size="60"/></p>
<p align="center"><anchor>Send<go href="mailto.php3" method="post">
<postfield name="send" value="1"/>
<postfield name="fm" value="$(fm:E)"/>
<postfield name="to" value=""/>
<postfield name="cc" value="$(cc:E)"/>
<postfield name="sj" value=""/>
<postfield name="bd" value="$(bd:E)"/>
</go></anchor>
<do type="prev" label="back"><prev/></do>
<do type="help" label="help"><go href="#hlp"/></do>
</p>
</card>
<card id="hlp" title="wap4.com">
<do type="prev" label="back">
<prev/>
</do>
<!-- 
<do type="accept" label="more">
<go href="smh.wml"/>
</do>
-->
<p align="center">Send Email Help</p>
<p align="left">Using this Service enables you to send emails from your wap-device to any valid e-mail address.</p>
</card>
</wml>
