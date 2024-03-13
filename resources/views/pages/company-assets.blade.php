@extends('layouts.main')
@section('content')
    <div class="main-container py-4">
        <div class="">
            @include('components.inline-title', [
                'label' => 'Company Assets',
                'width' => 'border-b border-b-darkColor pb-4',
            ])
        </div>
        <div class="mt-10">
            <livewire:CompanyAssetsList />
        </div>

    </div>
@endsection
<script>
    window.addEventListener('scroll', () => {
        console.log(window.scrollY);
    });
</script>
