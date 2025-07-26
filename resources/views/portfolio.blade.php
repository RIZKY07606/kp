@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

<!-- HEADER / HERO -->
<div class="position-relative mb-5">
    <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact Hero" 
         class="img-fluid w-100"
         style="width: 1312px; max-width: 100%; height: 400px; object-fit: cover; border-radius: 64px; display: block; margin-left: auto; margin-right: auto;">
    <div class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center w-100">
        <h1 class="display-5 fw-bold" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);">
            Portfolio
        </h1>
    </div>
</div>

<!-- PORTFOLIO GRID -->
<div class="container pb-5">
    <div class="row g-4">
        @foreach ($portfolios as $portfolio)
            <div class="col-md-6">
    <div class="rounded-4 overflow-hidden shadow-sm bg-white position-relative"
         data-bs-toggle="modal"
         data-bs-target="#portfolioModal{{ $portfolio->id }}"
         style="cursor:pointer; aspect-ratio: 4/3;">

        <!-- Gambar -->
        <img src="{{ asset('storage/' . $portfolio->image) }}"
             alt="Portfolio Item"
             class="w-100 h-100"
             style="object-fit: cover;">

        <!-- Title Overlay -->
        <div class="position-absolute bottom-0 w-100 text-center py-2"
             style="background: rgba(255,255,255,0.8); color: #7a5c3d;">
            <span class="fw-semibold">{{ $portfolio->title }}</span>
        </div>
    </div>
</div>



            <!-- Modal -->
            <div class="modal fade" id="portfolioModal{{ $portfolio->id }}" tabindex="-1" aria-labelledby="portfolioModalLabel{{ $portfolio->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="portfolioModalLabel{{ $portfolio->id }}">{{ $portfolio->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Portfolio Image" class="img-fluid mb-3 w-100" style="border-radius: 16px; object-fit: cover; max-height: 350px;">
                            <div class="text-secondary">
                                {!! $portfolio->description ?? '<em>Tidak ada deskripsi.</em>' !!}
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          @endforeach
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const params = new URLSearchParams(window.location.search);
    const highlight = params.get('highlight');
    if (highlight) {
        const modal = document.getElementById('portfolioModal' + highlight);
        if (modal) {
            const bsModal = new bootstrap.Modal(modal);
            bsModal.show();
        }
    }
});
</script>
@endpush

@push('styles')
<style>
.modal-body {
    max-height: 60vh;
    overflow-y: auto;
    word-break: break-word;
    overflow-wrap: anywhere;
    padding: 16px 18px 16px 18px;
}
.modal-body > div {
    word-break: break-word;
    overflow-wrap: anywhere;
}
</style>
@endpush
