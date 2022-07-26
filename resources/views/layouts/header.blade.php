<header class="header">
    <div class="header-top">
        <div class="header-top__inner container" ajax-elem>
            <a href="{{ Route('index') }}" class="header__logo logo">
                @hasSection('isDark')
                    @include('layouts.logo.white')
                @else
                    @include('layouts.logo.black')
                @endif
            </a>
            <nav class="header-menu">
                <a href="{{ Route('index') }}#about-award" class="header-menu__link">{{__('main.Menu_about')}}</a>
                <a href="{{ Route('index') }}#nomination" class="header-menu__link">{{__('main.Menu_nominations')}}</a>
                @if(!App::isLocale('en'))
                <a href="{{ Route('post.index') }}" class="header-menu__link">{{__('main.Menu_news')}}</a>
                @endif
                <a href="/files/Polozhenie_RCA.pdf" target="_blank" class="header-menu__link"
                   style="display: none !important;" elem-hide>Положение</a>
                <a href="{{ Route('index') }}#graphic" class="header-menu__link" style="display: none !important;"
                   elem-hide>График проведения</a>
                <a href="{{ Route('competition') }}" class="header-menu__link">{{__('main.Menu_competition')}}</a>
                <a href="{{ Route('index') }}#ceremony" class="header-menu__link" style="display: none !important;"
                   elem-hide>Церемония</a>
                <a href="{{ Route('index') }}#contacts" class="header-menu__link">{{__('main.Menu_contacts')}}</a>
                <a href="{{ Route('Awards2021') }}" class="header-menu__link">Awards2021</a>
                <a href="{{ Route('about.index') }}" class="header-menu__link">{{ __('main.about') }}</a>

                @if (Auth::check())
                    <a href="{{ in_array(Auth::user()->group_id, [4, 2], true) ? Route('admin.main') : Route('lk') }}"
                       class="header-menu__link dropdown__acc">{{__('main.Menu_userArea')}}</a>
                    <a href="{{ Route('logout') }}" title="Выйти" class="header-menu__link">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                @else
                    <a href="{{Route('register')}}" class="header-menu__link dropdown__acc">{{__('main.Menu_login')}}</a>
                @endif
                <a href="{{route('locale', __('main.set_lang'))}}" class="header-menu__link" style="border: solid 1px; border-radius: 10px; filter: brightness(86%);   padding:5px;" title="{{__('main.Сменить язык')}}">
                    {{__('main.set_lang')}}
                </a>


            </nav>
            <div class="header__user d-none">
                <a class="btn btn-primary btn-login font-weight-100" href="#submit">{{__('main.sendReq')}}</a>
            </div>
            <div class="menu-mob-toggle">
                <div class="menu-mob__icon" onclick="" burger-open>
                    <svg width="30" height="21" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.5" x2="30" y2="0.5" stroke="#222222"/>
                        <line y1="10.5" x2="30" y2="10.5" stroke="#222222"/>
                        <line y1="20.5" x2="30" y2="20.5" stroke="#222222"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <div class="menu-mob__menu">
        <div class="mobile-menu__header container">
            <a href="{{ Route('index') }}" class="header__logo logo">
                @include('layouts.logo.white')
            </a>
            <div class="cross-close white-close mr-0" burger-close>
                <svg width="39" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M22.3284 22.6213L21.6213 23.3284L32.935 34.6421L33.6421 33.935L22.3284 22.6213ZM17.3787 23.3284L16.6716 22.6213L4.65074 34.6421L5.35785 35.3492L17.3787 23.3284ZM16.6716 18.3787L17.3787 17.6716L6.06496 6.35786L5.35785 7.06497L16.6716 18.3787ZM34.3492 6.35786L22.3284 18.3787L21.6213 17.6716L33.6421 5.65076L34.3492 6.35786Z"
                          fill="#FBFBFB"/>
                </svg>
            </div>
        </div>
        <div class="menu-mob__inner container">
            <div class="menu-mob__nav">
                <nav class="menu-navigation">
                    <a href="{{ Route('index') }}#about-award" class="menu-navigation__link" burger-close>{{__('main.Menu_about')}}</a>
                    <a href="{{ Route('index') }}#nomination" class="menu-navigation__link" burger-close>{{__('main.Menu_nominations')}}</a>
                    @if(!App::isLocale('en'))
                    <a href="{{ Route('post.index') }}" class="menu-navigation__link" burger-close>{{__('main.Menu_news')}}</a>
                    @endif
                    <a href="/files/Polozhenie_RCA.pdf" target="_blank" class="menu-navigation__link"
                       style="display: none !important;" elem-hide burger-close>Положение</a>
                    <a href="{{ Route('index') }}#graphic" class="menu-navigation__link"
                       style="display: none !important;" elem-hide burger-close>График проведения</a>
                    <a href="{{ Route('competition') }}" class="menu-navigation__link" burger-close>{{__('main.Menu_competition')}}</a>
                    <a href="{{ Route('index') }}#ceremony" class="menu-navigation__link"
                       style="display: none !important;" elem-hide burger-close>Церемония</a>
                    <a href="{{ Route('index') }}#contacts" class="menu-navigation__link" burger-close>{{__('main.Menu_contacts')}}</a>
                    <a href="{{ Route('Awards2021') }}" class="menu-navigation__link">Awards2021</a>
                    <a href="{{ Route('about.index') }}" class="menu-navigation__link">{{ __('main.about') }}</a>
                    @if (Auth::check())
                        <a href="{{ in_array(Auth::user()->group_id, [4, 2], true) ? Route('admin.main') : Route('lk') }}"
                           class="menu-navigation__link dropdown__acc">{{__('main.Menu_userArea')}}</a>
                        <a href="{{ Route('logout') }}"
                           class="menu-navigation__link dropdown__acc">{{__('main.Menu_logou')}}</a>
                    @else
                        <a href="{{Route('register')}}" class="menu-navigation__link dropdown__acc">{{__('main.Menu_login')}}</a>
                    @endif
                </nav>
            </div>
            <div class="footer">
                <div class="footer-content">
                    <div class="footer-content__right">
                        <div class="social-panel mw-100 justify-content-start justifyc-content-md-end">
                            <a href="https://www.facebook.com/RussianCreativeAwards" target="_blank"
                               class="social-panel__link" style="display:none!important;" elem-hide>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0 18C0 8.05887 8.05887 0 18 0C27.9411 0 36 8.05887 36 18C36 27.9411 27.9411 36 18 36C8.05887 36 0 27.9411 0 18ZM19.8762 28.5836V18.7907H22.5794L22.9377 15.416H19.8762L19.8808 13.7269C19.8808 12.8467 19.9644 12.3751 21.2286 12.3751H22.9186V9H20.2149C16.9674 9 15.8243 10.6371 15.8243 13.3902V15.4163H13.8V18.791H15.8243V28.5836H19.8762Z"
                                          fill="#868686"/>
                                </svg>
                            </a>
                            <a href="https://vk.com/creativeawards" target="_blank" class="social-panel__link">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0ZM11 17C11.2166 27.6616 16.4139 34.0688 25.526 34.0688H26.0426V27.9691C29.3909 28.3109 31.9227 30.8225 32.9389 34.0688H37.67C36.3707 29.2164 32.9555 26.5339 30.8233 25.5088C32.9555 24.2444 35.954 21.169 36.6703 17H32.3724C31.4395 20.383 28.6746 23.4585 26.0426 23.7489V17H21.7445V28.8234C19.0792 28.14 15.7143 24.8253 15.5644 17H11Z"
                                          fill="#868686"/>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/russiancreativeawards/" target="_blank"
                               class="social-panel__link" style="display:none!important;" elem-hide>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0 18C0 8.05887 8.05887 0 18 0C27.9411 0 36 8.05887 36 18C36 27.9411 27.9411 36 18 36C8.05887 36 0 27.9411 0 18ZM18.0009 8.4C15.3937 8.4 15.0665 8.4114 14.0425 8.458C13.0204 8.5048 12.3228 8.6666 11.7124 8.90401C11.081 9.14921 10.5454 9.47721 10.0118 10.011C9.47781 10.5446 9.14981 11.0802 8.9038 11.7114C8.6658 12.322 8.5038 13.0198 8.4578 14.0415C8.412 15.0655 8.4 15.3929 8.4 18.0001C8.4 20.6073 8.4116 20.9335 8.458 21.9575C8.505 22.9796 8.6668 23.6772 8.90401 24.2876C9.14941 24.919 9.47741 25.4546 10.0112 25.9882C10.5446 26.5222 11.0802 26.851 11.7112 27.0962C12.322 27.3336 13.0198 27.4954 14.0417 27.5422C15.0657 27.5888 15.3927 27.6002 17.9997 27.6002C20.6071 27.6002 20.9333 27.5888 21.9573 27.5422C22.9794 27.4954 23.6778 27.3336 24.2886 27.0962C24.9198 26.851 25.4546 26.5222 25.988 25.9882C26.522 25.4546 26.85 24.919 27.096 24.2878C27.332 23.6772 27.494 22.9794 27.542 21.9577C27.588 20.9337 27.6 20.6073 27.6 18.0001C27.6 15.3929 27.588 15.0657 27.542 14.0417C27.494 13.0196 27.332 12.322 27.096 11.7116C26.85 11.0802 26.522 10.5446 25.988 10.011C25.454 9.47701 24.92 9.14901 24.288 8.90401C23.676 8.6666 22.978 8.5048 21.9559 8.458C20.9319 8.4114 20.6059 8.4 17.9979 8.4H18.0009Z"
                                          fill="#868686"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M17.1397 10.13C17.3953 10.1296 17.6805 10.13 18.0009 10.13C20.5641 10.13 20.8679 10.1392 21.8801 10.1852C22.8161 10.228 23.3242 10.3844 23.6626 10.5158C24.1106 10.6898 24.43 10.8978 24.7658 11.2338C25.1018 11.5698 25.3098 11.8898 25.4842 12.3378C25.6156 12.6758 25.7722 13.1838 25.8148 14.1199C25.8608 15.1319 25.8708 15.4359 25.8708 17.9979C25.8708 20.5599 25.8608 20.8639 25.8148 21.8759C25.772 22.8119 25.6156 23.32 25.4842 23.658C25.3102 24.106 25.1018 24.425 24.7658 24.7608C24.4298 25.0968 24.1108 25.3048 23.6626 25.4788C23.3246 25.6108 22.8161 25.7668 21.8801 25.8096C20.8681 25.8556 20.5641 25.8656 18.0009 25.8656C15.4375 25.8656 15.1337 25.8556 14.1217 25.8096C13.1857 25.7664 12.6776 25.61 12.339 25.4786C11.891 25.3046 11.571 25.0966 11.235 24.7606C10.899 24.4246 10.691 24.1054 10.5166 23.6572C10.3852 23.3192 10.2286 22.8112 10.186 21.8751C10.14 20.8631 10.1308 20.5591 10.1308 17.9955C10.1308 15.4319 10.14 15.1295 10.186 14.1175C10.2288 13.1815 10.3852 12.6734 10.5166 12.335C10.6906 11.887 10.899 11.567 11.235 11.231C11.571 10.895 11.891 10.687 12.339 10.5126C12.6774 10.3806 13.1857 10.2246 14.1217 10.1816C15.0073 10.1416 15.3505 10.1296 17.1397 10.1276V10.13ZM23.1254 11.724C22.4893 11.724 21.9733 12.2394 21.9733 12.8756C21.9733 13.5117 22.4893 14.0277 23.1254 14.0277C23.7614 14.0277 24.2774 13.5117 24.2774 12.8756C24.2774 12.2396 23.7614 11.724 23.1254 11.724ZM18.0009 13.07C15.2783 13.07 13.0708 15.2775 13.0708 18.0001C13.0708 20.7227 15.2783 22.9292 18.0009 22.9292C20.7235 22.9292 22.9302 20.7227 22.9302 18.0001C22.9302 15.2775 20.7235 13.07 18.0009 13.07Z"
                                          fill="#868686"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M18.0009 14.8001C19.7681 14.8001 21.2009 16.2327 21.2009 18.0001C21.2009 19.7673 19.7681 21.2001 18.0009 21.2001C16.2335 21.2001 14.8009 19.7673 14.8009 18.0001C14.8009 16.2327 16.2335 14.8001 18.0009 14.8001Z"
                                          fill="#868686"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer-content__copyrite">
                        <div class="copyrite-text">
                            © Russian Creative Awards <?php echo date('Y') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>