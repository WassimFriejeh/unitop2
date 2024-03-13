@extends('layouts.master')

@php
    $route = request()->route()->getName();

    $is_transparent = false;
    if (in_array($route, ['homepage', 'about-us', 'our-founder', 'our-story', 'company-history', 'sustainability'])) {
        $is_transparent = true;
    }
@endphp
@section('mainContent')
    @include('partials.header', ['is_transparent' => $is_transparent])

    {{-- @dd($is_transparent) --}}
    <div class="font-Helvetica-Neue {{ !$is_transparent ? 'lg:pt-[80px] md:pt-[60px] pt-[50px]' : '' }}">
        @yield('content')
    </div>
    <div class="mt-14">
        @include('partials.footer')
    </div>
@endsection
@section('master-scripts')
    @yield('scripts')
    <script>
        window.addEventListener('load', function() {
            // Check if the 'go_to_section' query parameter is present
            @if (request()->input('go_to_section'))
                window.WassimWebsiteFunctions.scrollToElement('{{ request()->input('go_to_section') }}');
                window.WassimWebsiteFunctions.removeQueryParameter('go_to_section');
            @endif
            @if ($is_transparent)
                window.WassimWebsiteFunctions.adjustNavbar();
            @endif

        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"
        integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <script language="javascript">
        function NotificationFunction() {
            @if (request()->input('notification'))
                NourhanWebsiteFunctions.ShowMessage("NOTIFICATION", "{!! request()->input('notification') !!}");
                NourhanWebsiteFunctions.removeQueryNotificationString();
            @endif
            @if (request()->input('notification_title') && request()->input('notification_message'))
                NourhanWebsiteFunctions.ShowMessage("{{ request()->input('notification_title') }}",
                    "{{ request()->input('notification_message') }}");
                NourhanWebsiteFunctions.removeQueryNotificationString();
            @endif
            @if (request()->input('title') && request()->input('message'))

                NourhanWebsiteFunctions.ShowMessage("{{ request()->input('title') }}", "{{ request()->input('message') }}");
                NourhanWebsiteFunctions.removeQueryNotificationString();
            @endif
            @if (request()->input('notification_id'))
                <?php $notification = \App\Models\NotificationModel::getNotification(request()->input('notification_id'));
                ?>
                NourhanWebsiteFunctions.ShowMessage("{{ $notification->label }}", "{{ $notification->text }}");
                NourhanWebsiteFunctions.removeQueryNotificationString();
            @endif
        }
    </script> --}}

@endsection
