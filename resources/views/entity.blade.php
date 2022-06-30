<div class="section-submit__content">
    <form id="prof_organization" class="add-form" action="{{ Route('form.organization.store') }}"
          enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="is_form2" value="{{ (int) (Request::url() === Route('competition')) }}">
        <input type="hidden" name="is_organization" value="1">
        <input type="hidden" name="is_lk" value="{{ (int) (Request::url() === Route('lk')) }}">
        @php
            $user_id = null;
            if ($user = auth()->user()){
                $user_id = $user->id;
            }
        @endphp
        <input type='hidden' name='user_id' value='{{ $user_id }}'>
        <h4 class="heading heading-miQ  1`ni heading-grid-100">{{__('main.form_ent_main')}}
            </h4>
        <div class="add-form__left">
            @include('forms.first_block')
            <div class="form-types">
                <label class="form-type-label">{{__('main.form_ent_jobTitle')}}</label>
                <input name="job_title" type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">{{__('main.form_ent_organName')}}</label>
                <input name="organization_name" type="text" class="form-type-text" required>
            </div>
            @include('forms.regions')
            <div class="form-types">
                <label class="form-type-label">{{__('main.form_ent_pName')}}</label>
                <input name="project_name" type="text" class="form-type-text" required>
            </div>
        </div>
        <div class="add-form__center">
            <div class="form-types mt-md-auto">
                <label class="form-type-label">{{__('main.form_ent_Desc')}}<span data-output-count="description"
                                                                     data-max-count="500"></span>{{__('main.form_ent_ot')}}</label>
                <textarea required name="project_description" type="text" class="form-type-text" rows="1"
                          data-input-count="description"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">{{__('main.form_ent_arc')}} <span data-output-count="achievements"
                                                                                  data-min-count="500">{{__('main.form_ent_ot')}}</span></label>
                <textarea name="achievements" type="text" class="form-type-text" rows="1"
                          data-input-count="achievements"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">{{__('main.form_ent_media')}} <span
                            data-output-count="media">{{__('main.form_ent_media2')}}</span>*</label>
                <textarea required name="media" type="text" class="form-type-text" rows="1"
                          data-input-count="media"></textarea>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">{{__('main.form_ent_info')}}</label>
                <input name="media_doc" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="media_doc"></div>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">{{__('main.form_ent_why')}} <span
                            data-output-count="why_worthy">{{__('main.form_ent_ot')}}</span>*</label>
                <textarea required name="why_worthy" type="text" class="form-type-text" rows="1"
                          data-input-count="why_worthy"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">{{__('main.form_ent_soc')}}</label>
                <input name="social_url" required type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">{{__('main.form_ent_nom')}}</label>
                <input name="name_organizer" required type="text" class="form-type-text" required>
            </div>
        </div>
        <div class="add-form__right">
            <div class="form-types">
                <label class="form-type-label">{{__('main.form_ent_site')}}</label>
                <input name="organization_site" required type="text" class="form-type-text" required>
            </div>
            <div class="add-form__double">
                <div class="form-types">
                    <label class="form-type-label">{{__('main.form_ent_number')}}</label>
                    <input data-mask-phone="" type="text" class="form-type-text" name="phone_nominee">
                </div>
                <div class="form-types mt-md-auto">
                    <label class="form-type-label">{{__('main.form_ent_email')}}<span
                                data-output-count="email">{{__('main.form_ent_link')}}</span>*</label>
                    <textarea name="email_nominee" type="text" required class="form-type-text" rows="1"
                              data-input-count="email"></textarea>
                </div>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">{{__('main.form_ent_present')}} <br>{{__('main.form_ent_present2')}}</label>
                <input name="presentation_file" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="presentation_file"></div>
            </div>
            <div class="form-types">
                <label class="form-type-label">{{__('main.form_ent_video')}}</label>
                <input name="video_nominate" type="text" class="form-type-text" required>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">{{__('main.form_ent_photo')}}</label>
                <input name="photo_director" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="photo_director"></div>
            </div>
            @include('forms.pd_accept')
            <div class="w-100 mt-auto">
                <button class="btn btn-primary w-100">{{__('main.form_ent_req')}}</button>
            </div>

        </div>
    </form>
</div>
