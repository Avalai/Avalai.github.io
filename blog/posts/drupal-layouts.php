<!doctype html>
<html lang="en">
<?php include("../includes/head.php"); ?>
<body>
  <div id="layout">
    <div id="main">
      <?php include("../includes/header.php"); ?>
      <div class="content">
        <div class="pure-u-1 imgFeature" style="background: #fff url('http://marinam.tngconsulting.ca/wp-content/uploads/2014/12/typing_code.jpg') cover;"></div>
        <div class="pure-u-1 postTitle">
          <h2>Drupal Layouts: Views, Panels and Display Blocks</h2>
        </div>
        <div class="pure-u-1 postBody">
          <p>Making the perfect layout in Drupal can be a pain. Recently I had to make a layout in an unstyled starter template, which meant that the standard block areas were there, but the extended functionality I was looking for wasn't. I thought I wanted to use a panel for every single page on my website, but what a pain! Creating a view for each set of content, and then making a dozen panels for all the different pages and layouts I wanted? Some of these things were way too complicated, and at worst completely impossible.</p>

          <p>I stumbled upon the perfect solution when trying to create a slideshow, of all things, and this module has become a standard for any Drupal site I work on. The module <a href="https://www.drupal.org/project/ddblock" target="_blank">Dynamic Display Block</a> appears to be widely known as a clever way to showcase content in a slideshow, with a variety of themes and settings available to the average Drupal user. In my project, however, I discovered that this module also gives you one invaluable tool: options to lay out your content types.</p>

          <p>Let me explain. I used Views Slideshow for my slideshow, which consisted of an image, some text, and a read more button. All of these pieces were posts in a content type specifically for the slide content. I needed to lay the fields out in two columns, but the only conceivable solution I could think of was to use a mini-panel inside a view that was shown on the page panel. Besides being way too complicated and a twisted solution at best, I'm pretty sure there is no way to put a panel or block in a view at all.</p>

          <a href="https://marinamilette.files.wordpress.com/2014/12/overclocked.png"><img class=" size-full wp-image-16 aligncenter" src="https://marinamilette.files.wordpress.com/2014/12/overclocked.png" alt="overclocked" width="544" height="300" /></a>

          <p>I originally installed DDBlock to try a completely new approach to the slideshow, though admittedly only after a few other slider modules had failed my expectations. Instead of being the ugly slider I expected, I got a nice surprise while editing the display settings of my content type. There was a new section at the bottom of the page that let me pick a column layout!</p>

          <a href="https://marinamilette.files.wordpress.com/2014/12/drupal_ddb.png"><img class="aligncenter wp-image-6 size-large" src="https://marinamilette.files.wordpress.com/2014/12/drupal_ddb.png?w=660" alt="drupal_DDB" width="660" height="291" /></a>

          <p>Once I chose a two-column layout, my fields were separated into columns. It was perfect! I arranged my fields as I described above, and I didn't have to edit the slideshow views or do any extra adjustments. I then went into my other content types and edited their displays as well, and it proved to be the simplest way I have ever found to get a custom layout for everything on your site! Instead of creating panel after panel for every possible option, I can create a layout for every content type and the posts format themselves automatically.</p>

          <h3>To recap:</h3>

          <p><strong>Views</strong> are a way to organize a set of content into, well, a list. It lets you display content and even choose to only display particular fields, but it is not a layout tool. Views do not hard-code your content in, so your new posts will appear as you make them.</p>

          <p><strong>Panels</strong> are a great way to lay content out in a pleasant way. You can place nodes, views, blocks and various other pieces of your Drupal site into a table to lay it out exactly the way you want it. The content in here will only change if you update it directly. This is convenient, but it is a bit limited. Panels can also only be pages.</p>

          <p><strong>Mini-panels</strong> are a layout tool, like the panels themselves, but when created they become blocks instead of pages. They can be placed into sections of your website in the "Blocks" section of your admin panel just like any other blocks. Also, you can put mini-panels into panels for even more customization!</p>

          <p><strong>Dynamic Display Blocks</strong> is a module that, among other things I'm sure, will let you customize the display of your content-types into columns. This is great for laying out the content itself, instead of creating a panel and mini-panel for every single  bit of content you add on your site. These layout carry over into the views, panels and mini-panels you put your content into.</p>
        </div>
      </div><!-- End of Content -->
    </div><!-- End of Main -->

  <?php include("../includes/footer.php"); ?>
  </div><!-- End of layout -->
</body>

</html>
