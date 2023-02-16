@extends(route_prefix().'admin.admin-master')
@section('title')
    {{__('Edit Price Plan')}}
@endsection

@section('style')

    <style>
        .all-field-wrap .action-wrap {
            position: absolute;
            right: 0;
            top: 0;
            background-color: #f2f2f2;
            height: 100%;
            width: 60px;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .f_desc {
            height: 100px;
        }
    </style>

@endsection

@section('content')

    @php
        $lang_slug = request()->get('lang') ?? \App\Facades\GlobalLanguage::default_slug();
         $features = ['dashboard','admin','user','brand','custom_domain','testimonial','form_builder','own_order_manage','appearance_settings','general_settings',
        'language','page','blog','service','donation','job','event','support_ticket','knowledgebase','faq','gallery','video','portfolio','eCommerce','storage','advertisement'];
    @endphp

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <x-admin.header-wrapper>
                    <x-slot name="left">
                        <h4 class="card-title mb-5">{{__('Edit Price Plan')}}</h4>
                    </x-slot>
                    <x-slot name="right" class="d-flex">

                        <form action="{{route(route_prefix().'admin.price.plan.edit',$plan->id)}}" method="get">

                            <x-fields.select name="lang" title="{{__('Language')}}">

                                @foreach(\App\Facades\GlobalLanguage::all_languages() as $lang)
                                    <option value="{{$lang->slug}}"
                                            @if($lang->slug === $lang_slug) selected @endif>{{$lang->name}}</option>
                                @endforeach

                            </x-fields.select>

                        </form>
                        <p></p>
                        <x-link-with-popover permissions="price-plan-list"
                                             url="{{route(route_prefix().'admin.price.plan')}}" extraclass="ml-3">
                            {{__('All Price Plan')}}
                        </x-link-with-popover>
                        <x-link-with-popover permissions="price-plan-create" class="secondary"
                                             url="{{route(route_prefix().'admin.price.plan.create')}}"
                                             extraclass="ml-3">
                            {{__('Create Price Plan')}}
                        </x-link-with-popover>
                    </x-slot>
                </x-admin.header-wrapper>

                <x-error-msg/>
                <x-flash-msg/>

                <form class="forms-sample" method="post" action="{{route(route_prefix().'admin.price.plan.update')}}">
                    @csrf
                    <x-fields.input type="hidden" name="lang" value="{{$lang_slug}}"/>
                    <x-fields.input type="hidden" name="id" value="{{$plan->id}}"/>

                    <x-fields.input name="title" label="{{__('Title')}}" value="{{$plan->getTranslation('title',$lang_slug)}}"/>
                    <x-fields.input name="subtitle" label="{{__('Subtitle')}}" value="{{$plan->getTranslation('subtitle',$lang_slug)}}"/>

                    @if(!tenant())
                        <div class="form-group landlord_price_plan_feature">
                            <h4>{{__('Select Features')}}</h4>
                            <div class="feature-section">
                                <ul>
                                    @php
                                        $feature = [];
                                    @endphp
                                    @foreach($features as $key => $feat)

                                        <li class="d-inline">
                                            <input type="checkbox" name="features[]" id="{{$key}}" class="exampleCheck1" value="{{$feat}}"

                                            @foreach($plan->plan_features as $feat_old)
                                                {{$feat_old->feature_name == $feat ? 'checked' : ''}}

                                                    @php
                                                        $feature[] = $feat_old->feature_name;
                                                    @endphp

                                                @endforeach
                                            >
                                            <label class="ml-1" for="{{$key}}">{{str_replace('_', ' ', ucfirst($feat))}}</label>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        @php
                            $ecommerce_feature_check = in_array('eCommerce',$feature) ? 'eCommerce' : '';
                            $product_feature_check = in_array('product',$feature) ? 'product' : '';
                            $inventory_feature_check = in_array('inventory',$feature) ? 'inventory' : '';
                            $campaign_feature_check = in_array('campaign',$feature) ? 'campaign' : '';
                        @endphp

                        <div class="row">
                            <div class="form-group ecommerce_data">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                                                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">{{__('Product')}}</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
                                                role="tab" aria-controls="profile-tab-pane" aria-selected="false">{{__('Inventory')}}</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab"
                                                aria-controls="contact-tab-pane" aria-selected="false">{{__('Campaigns')}}</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                                        <div class="extra my-3 product_section_parent">
                                            <x-fields.switcher name="ecommerce_permission[]" class="product_section_parent_switcher" value="{{ in_array('product',$feature) ? 'product' : '' }}" dataValue="product" label="{{__('Enable/Disable Product Permission')}}"/>
                                        </div>

                                        <div class="product_section_child">
                                            <x-fields.input type="text" value="{{$plan->product_create_permission}}" name="product_create_permission" label="{{__('Product Create Permission')}}"/>
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('product_simple_search_permission',$feature) ? 'product_simple_search_permission' : '' }}" dataValue="product_simple_search_permission" label="{{__('Enable/Disable Product Simple Search Permission')}}"/>
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('product_advance_search_permission',$feature) ? 'product_advance_search_permission' : ''  }}" dataValue="product_advance_search_permission" label="{{__('Enable/Disable Product Advance Search Permission')}}"/>
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('product_duplication_permission',$feature) ? 'product_duplication_permission' : ''  }}" dataValue="product_duplication_permission" label="{{__('Enable/Disable Product Duplication Permission')}}"/>
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('product_bulk_delete_permission',$feature) ? 'product_bulk_delete_permission' : ''  }}" dataValue="product_bulk_delete_permission" label="{{__('Enable/Disable Product Bulk Delete Permission')}}"/>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                                        <div class="extra my-3 inventory_section_parent">
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('inventory',$feature) ? 'inventory' : '' }}" class="inventory_section_parent_switcher" dataValue="inventory" label="{{__('Enable/Disable Inventory Permission')}}"/>
                                        </div>

                                        <div class="inventory_section_child">
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('inventory_update_product_permission',$feature) ? 'inventory_update_product_permission' : ''}}" dataValue="inventory_update_product_permission" label="{{__('Enable/Disable Inventory Update Product Permission')}}"/>
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('inventory_simple_search_permission',$feature) ? 'inventory_simple_search_permission' : ''}}" dataValue="inventory_simple_search_permission" label="{{__('Enable/Disable Inventory Simple Search Permission')}}"/>
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('inventory_advance_search_permission',$feature) ? 'inventory_advance_search_permission' : ''}}" dataValue="inventory_advance_search_permission" label="{{__('Enable/Disable Inventory Advance Search Permission')}}"/>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

                                        <div class="extra my-3 campaign_section_parent">
                                            <x-fields.switcher name="ecommerce_permission[]" value="{{ in_array('campaign',$feature) ? 'campaign' : '' }}"  class="campaign_section_parent_switcher" dataValue="campaign" label="{{__('Enable/Disable Campaign Permission')}}"/>
                                        </div>

                                        <div class="campaign_section_child">
                                            <x-fields.input value="{{ $plan->campaign_create_permission }}" type="text" name="campaign_create_permission" label="{{__('Campaign Create Permission')}}"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group page_permission_box d-none">
                            <label for="">{{__('Page Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="page_permission_feature"
                                   value="{{$plan->page_permission_feature}}">
                        </div>

                        <div class="form-group blog_permission_box d-none">
                            <label for="">{{__('Blog Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="blog_permission_feature"
                                   value="{{$plan->blog_permission_feature}}">
                        </div>

                        <div class="form-group product_permission_box d-none">
                            <label for="">{{__('Product Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="product_permission_feature"
                                   value="{{$plan->product_permission_feature}}">
                        </div>

                        <div class="form-group service_permission_box d-none">
                            <label for="">{{__('Service Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="service_permission_feature"
                                   value="{{$plan->service_permission_feature}}">
                        </div>

                        <div class="form-group donation_permission_box d-none">
                            <label for="">{{__('Donation Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="donation_permission_feature"
                                   value="{{$plan->donation_permission_feature}}">
                        </div>

                        <div class="form-group job_permission_box d-none">
                            <label for="">{{__('Job Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="job_permission_feature"
                                   value="{{$plan->job_permission_feature}}">
                        </div>

                        <div class="form-group event_permission_box d-none">
                            <label for="">{{__('Event Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="event_permission_feature"
                                   value="{{$plan->event_permission_feature}}">
                        </div>

                        <div class="form-group knowledgebase_permission_box d-none">
                            <label for="">{{__('Knowledgebase Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="knowledgebase_permission_feature"
                                   value="{{$plan->knowledgebase_permission_feature}}">
                        </div>

                        <div class="form-group portfolio_permission_box d-none">
                            <label for="">{{__('Portfolio Create Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="portfolio_permission_feature"
                                   value="{{$plan->portfolio_permission_feature}}">
                        </div>

                        <div class="form-group storage_permission_box d-none">
                            <label for="">{{__('Storage Manage Permission')}}</label>
                            <input type="number" min="1" class="form-control" name="storage_permission_feature"
                                   value="{{$plan->storage_permission_feature}}">
                            <small class="text-primary">{{__('Storage will count as per (MB)')}}</small>
                        </div>


                        <x-fields.select name="type" title="{{__('Type')}}">
                            <option @if($plan->type === \App\Enums\PricePlanTypEnums::MONTHLY) selected
                                    @endif value="0">{{__('Monthly')}}</option>
                            <option @if($plan->type === \App\Enums\PricePlanTypEnums::YEARLY) selected
                                    @endif value="1">{{__('Yearly')}}</option>
                            <option @if($plan->type === \App\Enums\PricePlanTypEnums::LIFETIME) selected
                                    @endif value="2">{{__('Lifetime')}}</option>
                        </x-fields.select>

                        <div class="d-flex justify-content-start">
                            <x-fields.switcher name="has_trial" label="{{__('Free Trial')}}" value="{{$plan->has_trial}}"/>

                            <div class="form-group trial_date_box mx-4">
                                <label for="">{{__('Trial Days')}}</label>
                                <input type="number" class="form-control trial_days" name="trial_days" placeholder="Days.." value="{{$plan->trial_days}}">
                            </div>
                        </div>
                    @endif

                    <div class="zero_price_container">
                        <x-fields.switcher name="zero_price" label="{{__('Zero Price')}}" value="{{$plan->zero_price}}"/>
                    </div>

                    <div class="price_container">
                        <x-fields.input type="number" name="price" label="{{__('Price')}}" value="{{$plan->price}}"/>
                    </div>


                    <x-fields.select name="status" title="{{__('Status')}}">
                        <option @if($plan->status === \App\Enums\StatusEnums::PUBLISH) selected
                                @endif value="{{\App\Enums\StatusEnums::PUBLISH}}">{{__('Publish')}}</option>
                        <option @if($plan->status === \App\Enums\StatusEnums::DRAFT) selected
                                @endif value="{{\App\Enums\StatusEnums::DRAFT}}">{{__('Draft')}}</option>
                    </x-fields.select>


                    @if(!tenant())
                        <div class="iconbox-repeater-wrapper">
                            @php
                                $faq_items = !empty($plan->faq) ? unserialize($plan->faq,['class' => false]) : ['title' => ['']];
                            @endphp
                            @forelse($faq_items['title'] as $faq)
                                <div class="all-field-wrap">
                                    <div class="form-group">
                                        <label for="faq">{{__('Faq Title')}}</label>
                                        <input type="text" name="faq[title][]" class="form-control" value="{{$faq}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="faq_desc">{{__('Faq Description')}}</label>
                                        <textarea name="faq[description][]"
                                                  class="form-control f_desc">{{$faq_items['description'][$loop->index] ?? ''}}</textarea>
                                    </div>
                                    <div class="action-wrap">
                                        <span class="add"><i class="las la-plus"></i></span>
                                        <span class="remove"><i class="las la-trash"></i></span>
                                    </div>
                                </div>
                            @empty
                                <div class="all-field-wrap">
                                    <div class="form-group">
                                        <label for="faq">{{__('Faq Title')}}</label>
                                        <input type="text" name="faq[title][]" class="form-control"
                                               placeholder="{{__('faq title')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="faq_desc">{{__('Faq Description')}}</label>
                                        <textarea name="faq[description][]" class="form-control f_desc"
                                                  placeholder="{{__('faq description')}}"></textarea>
                                    </div>
                                    <div class="action-wrap">
                                        <span class="add"><i class="ti-plus"></i></span>
                                        <span class="remove"><i class="ti-trash"></i></span>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    @endif


                    <button type="submit" class="btn btn-gradient-primary me-2 mt-5">{{__('Save Changes')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        //Date Picker
        flatpickr('.date', {
            enableTime: false,
            dateFormat: "d-m-Y",
            minDate: "today"
        });

        let price = '{{$plan->price}}';

        if(price == '0'){
            $('.price_container').hide();
        }

        $(document).on('change', 'input[name=zero_price]', function (e){
            let el = $(this);
            if(el.prop('checked') == true){
                $('.price_container').fadeOut(500);
                $('.price_container').find('input[name="price"]').val('0');
            }else{
                $('.price_container').fadeIn(500);
                $('.price_container').find('input[name="price"]').val(price);
            }
        });


        $(document).on('change', 'select[name="lang"]', function (e) {
            $(this).closest('form').trigger('submit');
            $('input[name="lang"]').val($(this).val());
        });

        let page_permission = '{{$plan->page_permission_feature}}';
        let blog_permission = '{{$plan->blog_permission_feature}}';
        let product_permission = '{{$plan->product_permission_feature}}';

        let service_permission = '{{$plan->service_permission_feature}}';
        let donation_permission = '{{$plan->donation_permission_feature}}';
        let job_permission = '{{$plan->job_permission_feature}}';
        let event_permission = '{{$plan->event_permission_feature}}';
        let knowledgebase_permission = '{{$plan->knowledgebase_permission_feature}}';
        let portfolio_permission = '{{$plan->portfolio_permission_feature}}';
        let storage_permission = '{{$plan->storage_permission_feature}}';

        if (page_permission != '') {
            $('.page_permission_box').removeClass('d-none');
        }

        if (blog_permission != '') {
            $('.blog_permission_box').removeClass('d-none');
        }

        if (product_permission != '') {
            $('.product_permission_box').removeClass('d-none');
        }

        if (service_permission != '') {
            $('.service_permission_box').removeClass('d-none');
        }

        if (donation_permission != '') {
            $('.donation_permission_box').removeClass('d-none');
        }

        if (job_permission != '') {
            $('.job_permission_box').removeClass('d-none');
        }

        if (event_permission != '') {
            $('.event_permission_box').removeClass('d-none');
        }

        if (knowledgebase_permission != '') {
            $('.knowledgebase_permission_box').removeClass('d-none');
        }

        if (portfolio_permission != '') {
            $('.portfolio_permission_box').removeClass('d-none');
        }

        if (storage_permission != '') {
            $('.storage_permission_box').removeClass('d-none');
        }


        let trial_days = '{{$plan->trial_days}}';
        if(trial_days != '') {
            $('.trial_date_box').show();
        } else {
            $('.trial_date_box').hide();
        }


        let trial_status = '{{$plan->has_trial }}';

        if(trial_status == 0){
            $('.trial_date_box').hide();
        }else{
            $('.trial_date_box').show();
        }
        $(document).on('change', 'input[name=has_trial]', function (e){
            $('.trial_date_box').toggle(500);
        });

        $(document).on('change', '.exampleCheck1', function (e) {
            let feature = $('.exampleCheck1').data('feature');
            let el = $(this).val();

            if (el == 'page') {
                let page_box = $('.page_permission_box');
                if (el == 'page' && this.checked) {
                    page_box.removeClass('d-none');
                } else {
                    page_box.addClass('d-none');
                    page_box.find('input').val('');
                }
            }


            if (el == 'blog') {
                let blog_box =  $('.blog_permission_box');
                if (el == 'blog' && this.checked) {
                    blog_box.removeClass('d-none');
                } else {
                    blog_box.addClass('d-none');
                    blog_box.find('input').val('');
                }

            }


            if (el == 'product') {
                let product_box =  $('.product_permission_box');
                if (el == 'product' && this.checked) {
                    product_box.removeClass('d-none');
                } else {
                    product_box.addClass('d-none');
                    product_box.find('input').val('');
                }
            }

            if (el == 'service') {
                let service_box =  $('.service_permission_box');
                if (el == 'service' && this.checked) {
                    service_box.removeClass('d-none');
                } else {
                    service_box.addClass('d-none');
                    service_box.find('input').val('');
                }
            }

            if (el == 'donation') {
                let donation_box = $('.donation_permission_box');
                if (el == 'donation' && this.checked) {
                    donation_box.removeClass('d-none');
                } else {
                    donation_box.addClass('d-none');
                    donation_box.find('input').val('');
                }
            }

            if (el == 'job') {
                let job_box = $('.job_permission_box');
                if (el == 'job' && this.checked) {
                    job_box.removeClass('d-none');
                } else {
                    job_box.addClass('d-none');
                    job_box.find('input').val('');
                }
            }

            if (el == 'event') {
                let event_box = $('.event_permission_box');
                if (el == 'event' && this.checked) {
                    event_box.removeClass('d-none');
                } else {
                    event_box.addClass('d-none');
                    event_box.find('input').val('');
                }
            }

            if (el == 'knowledgebase') {
                let knowledgebase_box = $('.knowledgebase_permission_box');
                if (el == 'knowledgebase' && this.checked) {
                    knowledgebase_box.removeClass('d-none');
                } else {
                    knowledgebase_box.addClass('d-none');
                    knowledgebase_box.find('input').val('');
                }
            }

            if (el == 'portfolio') {
                let portfolio_box = $('.portfolio_permission_box');
                if (el == 'portfolio' && this.checked) {
                    portfolio_box.removeClass('d-none');
                } else {
                    portfolio_box.addClass('d-none');
                    portfolio_box.find('input').val('');
                }
            }

            if (el == 'storage') {
                let storage_box = $('.storage_permission_box');
                if (el == 'storage' && this.checked) {
                    storage_box.removeClass('d-none');
                } else {
                    storage_box.addClass('d-none');
                    storage_box.find('input').val('');
                }
            }


            if (el == 'eCommerce') {

                if (el == 'eCommerce' && this.checked) {
                    $('.ecommerce_data').removeClass('d-none');

                } else {
                    $('.ecommerce_data').addClass('d-none');
                    $('input[name="product_create_permission"]').val('');

                }
            }

        });
    </script>
    <x-repeater/>



    <script>
        // Features Extra code
        let ecom_feature = '{{$ecommerce_feature_check}}';

        if(ecom_feature != 'eCommerce'){
            $('.ecommerce_data').addClass('d-none');
        }

        let product_feature = '{{$product_feature_check}}';
        if(product_feature == 'product'){
            $('.product_section_child').show();
        }else{
            $('.product_section_child').hide();
        }
        $(document).on('change','.product_section_parent_switcher',function(){
            $('.product_section_child').toggle(500);
        });


        let inventory_feature = '{{$inventory_feature_check}}';
        if(inventory_feature == 'inventory'){
            $('.inventory_section_child').show();
        }else{
            $('.inventory_section_child').hide();
        }
        $(document).on('change','.inventory_section_parent_switcher',function(){
            $('.inventory_section_child').toggle(500);
        });


        let campaign_feature = '{{$campaign_feature_check}}';
        if(campaign_feature == 'campaign'){
            $('.campaign_section_child').show();
        }else{
            $('.campaign_section_child').hide();
        }
        $(document).on('change','.campaign_section_parent_switcher',function(){
            $('.campaign_section_child').toggle(500);
        });

    </script>



@endsection
