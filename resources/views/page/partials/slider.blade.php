<div class="rev_slider_wrapper">
  <div id="slider1" class="rev_slider" data-version="5.0">
    <ul>
      @foreach ($sliders as $slide)
        <li data-transition="random-premium"><img src="{{ asset('upload/'.$slide->image ?? '') }}" alt=""/>
          <div class="tp-caption large text-center"
               data-x="center"
               data-hoffset=""
               data-y="center" data-voffset="-60"
               data-width="['auto','auto','auto','auto']"
               data-height="['auto','auto','auto','auto']"
               data-transform_idle="o:1;"
               data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;e:Power2.easeOut;"
               data-transform_out="s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;"
               data-start="1200"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               style="z-index: 9; white-space: nowrap; font-size: 50px; line-height: 50px;">{{ $slide->title ?? '' }}
          </div>
          <div class="tp-caption medium text-center"
               data-x="center"
               data-hoffset=""
               data-y="center"
               data-voffset="0"
               data-width="['auto','auto','auto','auto']"
               data-height="['auto','auto','auto','auto']"
               data-transform_idle="o:1;"
               data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;e:Power2.easeOut;"
               data-transform_out="s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;"
               data-start="1700"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 25px;">{{ $slide->description ?? '' }}
          </div>
          <div class="tp-caption medium text-center"
               data-x="center"
               data-hoffset=""
               data-y="center"
               data-voffset="['65','65','65','90']"
               data-width="['auto','auto','auto','auto']"
               data-height="['auto','auto','auto','auto']"
               data-transform_idle="o:1;"
               data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1300;e:Power4.easeInOut;"
               data-transform_out="s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;"
               data-start="2200"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="#" class="btn btn-white btn-large">See Features</a></div>
        </li>
      @endforeach
    </ul>
    <div class="tp-bannertimer tp-bottom"></div>
  </div>
</div>
