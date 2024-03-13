@extends('layouts.main')
@section('content')

    @include('components.main-banner', ['image' => $ourPeople->banner_image['image'], 'label' => $ourPeople->label,'mobile_image'=>$ourPeople['mobile_image']['image'],])

    <div class="main-container w-full lg:!pr-0 lg:!mr-0">
        <div class="pt-10"> @include('components.paragraph', [
       'image' => $ourPeople->main_image['image'],
            'caption' => $ourPeople->caption,
            'title' => $ourPeople->paragraph_title,
            'paragraph' => $ourPeople->main_paragraph,
            'display' => 'block',
            'link' => '/job-openings',
            'label'=>'See current jobs',
        ])</div>

    </div><div class="main-container w-full lg:!pr-0 lg:!mr-0">
        @include('components.inline-title', [
            'label' =>    ___('text.our_team_highlights') ,
            'width' => 'lg:w-[40%] md:w-[73%] sm:w-[70%] w-[70%]',
        ])
        <div class="pt-7">
      @include('components.team-card')</div>
    </div>
    @include('components.articles-slide', ['title' => ___('text.our_team_sucess_story') ,])
    
@endsection

