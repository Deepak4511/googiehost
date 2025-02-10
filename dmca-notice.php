<?php 
$page ='dmca-notice';
include 'inc/header.php'; ?>
<!-- Header End -->
<div class="cta-box cta-full text-center block-double-tb white-text" style="background-color: #270069 !important;
      background-image: url(https://googiehost.com/img/GoogieHostBgmin-1.png) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;
      background-position: center !important;">
  <div class="inner">
    <div class="cta-inner format">
      <h1 class="massive-title">DIGITAL MILLENNUIM COPYRIGHT ACT NOTICE GENERATOR! </h1>
    </div>
  </div>
</div>
<div class="columns-2 columns-flex inner block-single mb-single white-bg shadow-small">
  <div class="col block-half" style="padding: 40px; margin-top: 75px;">
    <h2>DMCA Notice Generator</h2><br>
    <h3>Instantly Generate a DMCA Notice to Protect your Copyright</h3>
    <p>While we always feel glad when users land on GoogieHost, we are sorry to see you struggle for your stolen content… trust us we can relate!
      Nothing makes us more aggrieved than seeing your earnest content has been stolen by internet pirate and they are passing it as their own and gaining profit that is rightfully yours!

      But don’t worry, we have got your back. With our simple DMCA Notice Generator, you can get a customized DMCA Notice, both in Styled Text and HTML format.

      Just fill out the information below, submit, and find an instant DMCA Takedown Notice at your disposal. Check below for more information about the DMCA in general and how to use our generator in particular.</p><br>
  </div>
  <div class="col block-half block-single">
    <div class="columns-4  block-single-tb">
      <form class="pure-form pure-form-stacked" method="post" action="notice.php">
        <fieldset style="border: 1px solid #1D2772;">
          <legend>Your Details</legend>
          <label for="dmca_full_name">Full Name</label>
          <input class="pure-input-1-2" type="text" id="dmca_full_name" name="dmca_full_name" value="" required="">
          <label for="dmca_address">Address</label>
          <input class="pure-input-1" type="text" id="dmca_address" name="dmca_address" value="" required="">
          <label for="dmca_tel">Phone Number</label>
          <input class="pure-input-1-2" type="text" name="dmca_tel" id="dmca_tel" value="">
          <label for="dmca_email">Email</label>
          <input class="pure-input-1-2" type="email" id="dmca_email" name="dmca_email" value="" required="">
        </fieldset>
        <fieldset style="border: 1px solid #1D2772;">
          <legend>Infringement Details</legend>
          <label for="dmca_infringement_name">Name of Infringing Work</label>
          <input class="pure-input-1-2" type="text" id="dmca_infringement_name" name="dmca_infringement_name" value="" required="">
          <label for="dmca_original_urls">Original Content URLs</label>
          <textarea class="pure-input-1" name="dmca_original_urls" id="dmca_original_urls" rows="6" required=""></textarea>
          <label for="dmca_infringing_urls">Infringing Content URLs</label>
          <textarea class="pure-input-1" name="dmca_infringing_urls" id="dmca_infringing_urls" rows="6" required=""></textarea>
        </fieldset> <br>
        <p style="text-align: center;"><button class="pure-button pure-button-primary" type="submit" name="SubmitButton">Generate DMCA Notice</button></p>
      </form>
    </div>
  </div>
</div>
<div class="inner">
  <h2 class="text-center large-title mb-double mt-double">Frequently Asked Questions</h2>
  <div id="faqs" class="accordion block-double">

    <div id="faqs_1" class="accordion-group active">
      <div class="accordion-title" data-accordion="1">
        What is DMCA?</div>
      <div class="accordion-content">
        The Digital Millennium Copyright Act aka DMCA is a 1998 US copyright law that penalizes and criminalizes the production as well as the distribution of copyrighted works.
      </div>
    </div>

    <div id="faqs_2" class="accordion-group">
      <div class="accordion-title" data-accordion="2">What is a DMCA Notice?</div>
      <div class="accordion-content">
        Through a DMCA Notice, any concerned institutions like web hosting companies, search engines, or ISPs are informed that they are either hosting or linking to content/material that infringes on a copyright. The party that receives the DMCA Notice for such violations, should take down the material in question promptly. In case of non-compliance to the notice by the site owner, the ISP holds the authority to forcibly remove the concerned material.
      </div>
    </div>

    <div id="faqs_3" class="accordion-group">
      <div class="accordion-title" data-accordion="3"> Sending Your DMCA Notice</div>
      <div class="accordion-content">
        Here are the few pointers you must keep in mind before sending out the DMCA Notice:
        <ul>
          <li>Make sure that you indeed are the owner of the infringed material.</li>
          <li>Also, confirm that the website using your material does not fall within the bounds of Fair Usage Policy (For instance, using a picture from your site in order to rate or review your product).</li>
          <li>By sending the DMCA, you are also claiming on-record that you are the rightful owner of the infringed content and have the right to request its removal.</li>
          <li>Contacting the infringing website beforehand might lead you to the other websites that too are unfairly using your content (the infringing website that you discovered might have found your content on a different website that might be the original thief).</li>
          <li>If the situation remains unresolved, you can directly send the DMCA Notice to the web hosting company of the infringing website.</li>
        </ul>
      </div>
    </div>
    <div id="faqs_4" class="accordion-group">
      <div class="accordion-title" data-accordion="4">How to use GoogieHost’s DMCA Notice Generator to send the Notice?</div>
      <div class="accordion-content">

        <ul>
          <li>To use our DMCA Notice Generator, simply fill your details along with infringement details. Make sure you fill all the details correctly as it will appear in the DMCA Notice.</li>
          <li>If you don’t know the web host of the website infringing your content, visit <a href="https://googiehost.com/blog/go/health/">YouStable’s Site Health Checker.</a></li>
          <li>On this page, type in the URL of the infringed website and click on ‘Health Check’. A report will appear, scroll down to find the hosting provider of the said website under the head ‘Domain IP information’.</li>
          <li>Once you have the name of the Web Hosting company, do a quick search to find its support/abuse email ID.</li>
          <li>From our DMCA Notice Generator, either copy the Styled Text to the email or make a file using HTML Format.</li>
          </li>Send the Email to the concerned web host, sit back, and witness the removal of your infringed material.</li>
        </ul>
      </div>
    </div>

  </div>
</div>
<?php include 'inc/footer.php' ?>