
<section class="aboutArea section-padding2">
    <div class="container" data-padding-top="{{$data['padding_top']}}" data-padding-bottom="{{$data['padding_bottom']}}">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about-img tilt-effect wow ladeInLeft" data-wow-delay="0.0s">
                    {!! render_image_markup_by_attachment_id($data['left_image']) !!}
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-15">
                        @php
                            $original_title = $data['title'];
                            $explode_title = explode(' ',$original_title);
                            $title_after_expo = $explode_title;

                            $hightlited_word = current($explode_title);
                            array_shift($title_after_expo);
                        @endphp

                        <h2 class="tittle wow ladeInUp" data-wow-delay="0.0s">
                            <span class="textFlip tittleBgOne wow ladeInLeft" data-wow-delay="0.0s">
                                @for($i = 0; $i<strlen($hightlited_word); $i++)
                                    <span class="single" style="--i:{{$i}}">{{$hightlited_word[$i]}}</span>
                                @endfor
                            </span>
                           {{ implode(' ',$title_after_expo) }}
                        </h2>
                    </div>
                    <p class="aboutTopCap wow ladeInUp" data-wow-delay="0.1s">{!! $data['description'] !!}</p>
                    <div class="row">

                      @foreach($data['repeater_data']['repeater_title_'.get_user_lang()] ?? [] as $key=> $item)
                        <div class="col-md-6 col-sm-6">
                            <ul class="listing">
                                    @if($loop->index > 1)
                                        <li class="listItems wow ladeInUp" data-wow-delay="0.1s">
                                            {!! render_image_markup_by_attachment_id($data['repeater_data']['repeater_image_'.get_user_lang()][$key]) ?? '' !!}
                                            <h3 class="title">{{$item ?? '' }}</h3>
                                        </li>
                                    @else
                                        <li class="listItems wow ladeInUp" data-wow-delay="0.1s">
                                            {!! render_image_markup_by_attachment_id($data['repeater_data']['repeater_image_'.get_user_lang()][$key]) ?? '' !!}
                                            <h3 class="title">{{$item ?? '' }}</h3>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="btn-wrapper mt-20 wow ladeInUp" data-wow-delay="0.3s">
                        <a href="{{$data['button_url']}}" target="_blank" class="cmn-btn0">{{$data['button_text']}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
