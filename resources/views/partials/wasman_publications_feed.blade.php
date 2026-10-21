{{-- Additive publications feed, keeps pre-existing page styling and content intact. --}}
@if(isset($publications))
<section id="wasman-uploaded-publications" class="pub-publication-library" style="padding-top:50px;padding-bottom:50px">
 <div class="pub-library-header"><div><span class="pub-section-label">PUBLISHED RESOURCES</span><h2>Uploaded WASMaN Publications</h2></div></div>
 @if(isset($featuredPublication) && $featuredPublication)
  <div style="background:#f1fafc;padding:20px;border-radius:15px;margin-bottom:20px">
   <strong>Featured publication: {{ $featuredPublication->title }}</strong>
   <p>{{ $featuredPublication->description }}</p>
   <a href="{{ route('publications.read',$featuredPublication) }}" target="_blank" rel="noopener">Read online</a> &nbsp;
   <a href="{{ route('publications.download',$featuredPublication) }}">Download PDF</a>
  </div>
 @endif
 <div class="pub-publication-grid">
 @forelse($publications as $publication)
  <article class="pub-publication-card"><div class="pub-publication-card-image"><img src="{{ route('publications.cover',$publication) }}" alt="{{ $publication->title }}" loading="lazy"><span class="pub-publication-category">{{ $publication->category }}</span></div>
   <div class="pub-publication-card-body"><div class="pub-publication-date">{{ $publication->publication_date?->format('F Y') ?? 'Date unavailable' }}</div><h3>{{ $publication->title }}</h3><p>{{ $publication->description }}</p>
   <a href="{{ route('publications.read',$publication) }}" target="_blank" rel="noopener">Read publication</a> &nbsp; <a href="{{ route('publications.download',$publication) }}">Download PDF</a></div>
  </article>
 @empty<p>No uploaded publications have been published yet.</p>@endforelse
 </div><div style="margin-top:20px">{{ $publications->links() }}</div>
</section>
@endif
