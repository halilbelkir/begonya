<x-front.master>
    <section id="slider">
        <div id="rev_slider_1068_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="levano4export" data-source="gallery" style="background-color:transparent;padding:0px;">
            <div id="rev_slider_1068_1" class="rev_slider fullscreenbanner"  data-version="5.4.1">
                <ul>

                    @foreach($slider as $order => $slide)
                        <li data-index="rs-{{$order}}"
                            data-transition="slideoverup"
                            data-slotamount="7"
                            data-hideafterloop="0"
                            data-hideslideonmobile="off"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="1500"
                            data-thumb="plugins/slider-revolution/assets/images/drink_cover-100x50.jpg"
                            data-rotate="0"
                            data-saveperformance="off"
                            data-title="Drinks" >

                            <img src="{{config('app.loading_image')}}" alt=""
                                 data-lazyload="{{ ImageHelper::getImage($slide->image, 1600, 500) }}"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 class="rev-slidebg"
                                 data-no-retina>
                            @if(!empty($slide->text_1))
                                <div
                                    class="tp-caption Restaurant-Cursive
                                    tp-resizeme" id="slide-3012-layer-1"
                                    data-x="[{{$text_type[$slide->text_type]['text_1']['data-x']}}]"
                                    data-hoffset="[{{$text_type[$slide->text_type]['text_1']['data-hoffset']}}]"
                                    data-y="[{{$text_type[$slide->text_type]['text_1']['data-y']}}]"
                                    data-voffset="[{{$text_type[$slide->text_type]['text_1']['data-voffset']}}]"
                                    data-fontsize="['30','30','24','24']"
                                    data-lineheight="['59','59','40','40']"
                                    data-width="{{$text_type[$slide->text_type]['text_1']['data-width']}}"
                                    data-height="none"
                                    data-whitespace="[{{$text_type[$slide->text_type]['text_1']['data-whitespace']}}]"
                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeOut"}]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 20; white-space: nowrap; line-height: 59px;text-transform:left;">
                                    {{$slide->text_1}}
                                </div>
                            @endif
                            @if(!empty($slide->text_2))
                                <div
                                    class="tp-caption Restaurant-Display tp-resizeme"
                                    id="slide-3012-layer-2"
                                    data-x="[{{$text_type[$slide->text_type]['text_2']['data-x']}}]"
                                    data-hoffset="[{{$text_type[$slide->text_type]['text_2']['data-hoffset']}}]"
                                    data-y="[{{$text_type[$slide->text_type]['text_2']['data-y']}}]"
                                    data-voffset="[{{$text_type[$slide->text_type]['text_2']['data-voffset']}}]"
                                    data-fontsize="['60','40','38','40']"
                                    data-lineheight="['70','60','40','40']"
                                    data-width="{{$text_type[$slide->text_type]['text_2']['data-width']}}"
                                    data-height="none"
                                    data-whitespace="[{{$text_type[$slide->text_type]['text_2']['data-whitespace']}}]"
                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1100,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeOut"}]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    >
                                    {{$slide->text_2}}
                                </div>
                            @endif
                            @if(!empty($slide->text_3))
                                <div
                                    class="tp-caption Restaurant-Price   tp-resizeme"
                                    id="slide-3012-layer-3"
                                    data-x="[{{$text_type[$slide->text_type]['text_3']['data-x']}}]"
                                    data-hoffset="[{{$text_type[$slide->text_type]['text_3']['data-hoffset']}}]"
                                    data-y="[{{$text_type[$slide->text_type]['text_3']['data-y']}}]"
                                    data-voffset="[{{$text_type[$slide->text_type]['text_3']['data-voffset']}}]"
                                    data-fontsize="['30','30','24','24']"
                                    data-lineheight="['40','60','40','40']"
                                    data-width="{{$text_type[$slide->text_type]['text_3']['data-width']}}"
                                    data-height="none"
                                    data-whitespace="[{{$text_type[$slide->text_type]['text_3']['data-whitespace']}}]"
                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1200,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeOut"}]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]">
                                    {{$slide->text_3}}
                                </div>
                            @endif
                            @if(!empty($slide->button_text) && !empty($slide->button_route))
                                <div
                                    class="tp-caption Restaurant-Button rev-btn "
                                    id="slide-3012-layer-4"
                                    data-x="[{{$text_type[$slide->text_type]['button']['data-x']}}]"
                                    data-hoffset="[{{$text_type[$slide->text_type]['button']['data-hoffset']}}]"
                                    data-y="[{{$text_type[$slide->text_type]['button']['data-y']}}]"
                                    data-voffset="[{{$text_type[$slide->text_type]['button']['data-voffset']}}]"
                                    data-width="{{$text_type[$slide->text_type]['button']['data-width']}}"
                                    data-height="none"
                                    data-whitespace="[{{$text_type[$slide->text_type]['button']['data-whitespace']}}]"
                                    data-type="button"
                                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-3013","delay":""}]'
                                    data-responsive_offset="on"
                                    data-responsive="off"
                                    data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":2200,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(0, 0, 0, 0);bc:rgba(255, 224, 129, 1.00);bw:2px 2px 2px 2px;"}]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[12,12,12,12]"
                                    data-paddingright="[35,35,35,35]"
                                    data-paddingbottom="[12,12,12,12]"
                                    data-paddingleft="[35,35,35,35]">
                                    {{$slide->button_text}}
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    @section('js')
        <script type="text/javascript">
            var tpj = jQuery;
            var revapi1068;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_1068_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1068_1");
                } else {
                    revapi1068 = tpj("#rev_slider_1068_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "plugins/slider-revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 1000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "vertical",
                                drag_block_vertical: false
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 1024,
                                style: "uranus",
                                hide_onleave: false,
                                direction: "vertical",
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0,
                                space: 5,
                                tmp: '<span class="tp-bullet-inner"></span>'
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "wait",
                            visible_area: "80%",
                            presize: false
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [868, 768, 960, 720],
                        lazyType: "single",
                        shadow: 0,
                        spinner: "on",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: ".header",
                        fullScreenOffset: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            }); /*ready*/
        </script>
    @endsection
</x-front.master>
