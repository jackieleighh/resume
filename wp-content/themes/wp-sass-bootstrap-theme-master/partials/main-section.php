<?php

$postID = $single['id'];
$post = get_post($postID);
$title = get_field('title', $postID);
$subtitle = get_field('subtitle', $postID);
$background_image = get_field('background_image', $postID);
?>

<!-- <section id="<?php echo get_the_title(); ?>" class="band main-block" style="background-image: url('<?php echo $background_image; ?>');">
    <div class="band-container">
        <div class="band-inner">
        	<h1><i class="fas fa-angle-left"></i><?php echo $title; ?><i class="fas fa-angle-right"></i></h1>
        	<h2><?php echo $subtitle; ?></h2>
        </div>
    </div>
</section>

<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="<?php echo $background_image; ?>" data-natural-width="1400" data-natural-height="900">
</div>
 -->
 <section>
      <div class="container">
        <div id="ios-notice" class="alert alert-info hidden"><p><strong>Notice:</strong> Hello mobile user. Unfortunately, this parallax effect is not reliably achieved on mobile devices, so all you will see on this demo page are static backgrounds.  Please visit this page on a desktop browser to see its full effect.</p></div>
        <h1>Simple Parallax Scrolling <small>parallax.js</small></h1>
        <p>Parallax.js is a dirt simple parallax scrolling effect inspired by <a href="http://spotify.com">Spotify.com</a> and implemented as a jQuery plugin.</p>
        <a href="https://github.com/pixelcog/parallax.js/archive/v1.4.2.zip" class="btn btn-default download-link">Download Parallax.js v1.4.2</a>
        <a href="https://github.com/pixelcog/parallax.js/" class="btn btn-default">View on GitHub</a>
      </div>
    </section>

    <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="https://pixelcog.github.io/parallax.js/img/stellar-spire-eagle-nebula-1400x900.jpg" data-natural-width="1400" data-natural-height="900"><div class="container">
        <div id="ios-notice" class="alert alert-info hidden"><p><strong>Notice:</strong> Hello mobile user. Unfortunately, this parallax effect is not reliably achieved on mobile devices, so all you will see on this demo page are static backgrounds.  Please visit this page on a desktop browser to see its full effect.</p></div>
        <h1>Simple Parallax Scrolling <small>parallax.js</small></h1>
        <p>Parallax.js is a dirt simple parallax scrolling effect inspired by <a href="http://spotify.com">Spotify.com</a> and implemented as a jQuery plugin.</p>
        <a href="https://github.com/pixelcog/parallax.js/archive/v1.4.2.zip" class="btn btn-default download-link">Download Parallax.js v1.4.2</a>
        <a href="https://github.com/pixelcog/parallax.js/" class="btn btn-default">View on GitHub</a>
      </div></div>

    <section>
      <div class="container">
        <h2 id="installation">Installation</h2>

        <p>Download and include <code>parallax.min.js</code> in your document after including jQuery.</p>

        <pre><code>&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;/path/to/parallax.js&quot;&gt;&lt;/script&gt;
</code></pre>

        <h2 id="useage">Useage</h2>

        <h3 id="viadataattributes">Via data attributes</h3>

        <p>To easily add a parallax effect behind an element, add <code>data-parallax=&quot;scroll&quot;</code> to the element you want to use, and specify an image with <code>data-image-src=&quot;/path/to/image.jpg&quot;</code>.</p>

        <pre><code>&lt;div class=&quot;parallax-window&quot; data-parallax=&quot;scroll&quot; data-image-src=&quot;/path/to/image.jpg&quot;&gt;&lt;/div&gt;
</code></pre>

        <h3 id="viajavascript">Via JavaScript</h3>

        <p>To call the parallax plugin manually, simply select your target element with jQuery and do the following:</p>

        <pre><code>$('.parallax-window').parallax({imageSrc: '/path/to/image.jpg'});
</code></pre>

        <h3 id="underthehood">Under The Hood</h3>

        <p>What parallax.js will do is create a fixed-position element for each parallax image at the start of the document&#8217;s body. This mirror element will sit behind the other elements and match the position and dimensions of its target object.</p>

        <p>Due to the nature of this implementation, you must ensure that these parallax objects and any layers below them are transparent so that you can see the parallax effect underneath. Also, if there is no other content in this element, you will need to ensure that it has some fixed dimensions otherwise you won&#8217;t see anything.</p>

        <pre><code>.parallax-window {
    min-height: 400px;
    background: transparent;
}
</code></pre>
      </div>
    </section>

    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="https://pixelcog.github.io/parallax.js/img/helix-nebula-1400x1400.jpg" data-natural-width="1400" data-natural-height="1400"></div>

    <section>
      <div class="container">
        <h2 id="options">Options</h2>
        <p>Options can be passed in via data attributes of JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-image-src=&quot;&quot;</code>.</p>

        <div class="alert alert-warning"><p>Note that when specifying these options as html data-attributes, you should convert &#8220;camelCased&#8221; variable names into &#8220;dash-separated&#8221; lower-case names (e.g. <code>zIndex</code> would be <code>data-z-index=&quot;&quot;</code>).</p></div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th style="width: 100px;">Name</th>
                      <th style="width: 100px;">type</th>
                      <th style="width: 50px;">default</th>
                      <th>description</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>imageSrc</td>
                      <td>path</td>
                      <td>null</td>
                      <td>You must provide a path to the image you wish to apply to the parallax effect.</td>
                  </tr>
                  <tr>
                      <td>naturalWidth</td>
                      <td>number</td>
                      <td>auto</td>
                      <td rowspan="2">You can provide the natural width and natural height of an image to speed up loading and reduce error when determining the correct aspect ratio of the image.</td>
                  </tr>
                  <tr>
                      <td>naturalHeight</td>
                      <td>number</td>
                      <td>auto</td>
                  </tr>
                  <tr>
                      <td>position</td>
                      <td>xPos yPos</td>
                      <td>center center</td>
                      <td rowspan="3">This is analogous to the background-position css property. Specify coordinates as top, bottom, right, left, center, or pixel values (e.g. -10px 0px). The parallax image will be positioned as close to these values as possible while still covering the target element.</td>
                  </tr>
                  <tr>
                      <td>positionX</td>
                      <td>xPos</td>
                      <td>center</td>
                  </tr>
                  <tr>
                      <td>positionY</td>
                      <td>yPos</td>
                      <td>center</td>
                  </tr>
                  <tr>
                      <td>speed</td>
                      <td>float</td>
                      <td>0.2</td>
                      <td>The speed at which the parallax effect runs. 0.0 means the image will appear fixed in place, and 1.0 the image will flow at the same speed as the page content.</td>
                  </tr>
                  <tr>
                      <td>zIndex</td>
                      <td>number</td>
                      <td>-100</td>
                      <td>The z-index value of the fixed-position elements.  By default these will be behind everything else on the page.</td>
                  </tr>
                  <tr>
                      <td>bleed</td>
                      <td>number</td>
                      <td>0</td>
                      <td>You can optionally set the parallax mirror element to extend a few pixels above and below the mirrored element.  This can hide slow or stuttering scroll events in certain browsers.</td>
                  </tr>
                  <tr>
                      <td>iosFix</td>
                      <td>boolean</td>
                      <td>true</td>
                      <td>iOS devices are incompatable with this plugin. If true, this option will set the parallax image as a static, centered background image whenever it detects an iOS user agent. Disable this if you wish to implement your own graceful degradation.</td>
                  </tr>
                  <tr>
                      <td>androidFix</td>
                      <td>boolean</td>
                      <td>true</td>
                      <td>If true, this option will set the parallax image as a static, centered background image whenever it detects an Android user agent. Disable this if you wish to enable the parallax scrolling effect on Android devices.</td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
    </section>

    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://pixelcog.github.io/parallax.js/img/spiral-galaxy-1400x900.jpg" data-natural-width="1400" data-natural-height="900"></div>

    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://pixelcog.github.io/parallax.js/img/reflection-nebula-750x763.jpg" data-natural-width="750" data-natural-height="763"></div>
