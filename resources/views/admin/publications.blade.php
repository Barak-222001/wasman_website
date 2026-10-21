
@extends('layouts.admin')

@section('title', 'Manage Publications')

@section('content')

<div style="max-width:1150px;margin:24px auto;padding:0 16px;font-family:Manrope,Arial,sans-serif;">

    <div style="background:linear-gradient(120deg,#052f43,#087f9c);color:white;padding:30px;border-radius:20px;margin-bottom:24px;">
        <h1 style="font-size:30px;color:white;margin:0 0 8px;">
            Publications Management
        </h1>

        <p>
            Upload, publish and manage WASMaN research publications,
            scientific papers, policy briefs and technical documents.
        </p>

        <a href="{{ route('publications.index') }}"
           target="_blank"
           rel="noopener"
           style="color:#9df4e6;">
            View Public Publications Page &rarr;
        </a>
    </div>

    @if(session('success'))
        <div style="padding:14px;background:#e1f9e9;border-radius:9px;margin-bottom:14px;">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div style="padding:14px;background:#fff1f0;border-radius:9px;margin-bottom:14px;">
            <strong>Please correct the following:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section style="background:white;padding:28px;border:1px solid #dcebed;border-radius:18px;margin-bottom:28px;">

        <h2 style="font-size:23px;color:#052f43;">
            Add New Publication
        </h2>

        <form method="POST"
              action="{{ route('admin.publications.store') }}"
              enctype="multipart/form-data"
              style="display:grid;gap:18px;max-width:850px;">

            @csrf

            <label>
                <strong>Publication Title *</strong>
                <input type="text"
                       name="title"
                       value="{{ old('title') }}"
                       required
                       maxlength="255"
                       style="display:block;width:100%;box-sizing:border-box;padding:12px;border:1px solid #bacfd4;border-radius:9px;">
            </label>

            <label>
                <strong>Author / Institution</strong>
                <input type="text"
                       name="author"
                       value="{{ old('author') }}"
                       maxlength="255"
                       placeholder="e.g. WASMaN Research Team"
                       style="display:block;width:100%;box-sizing:border-box;padding:12px;border:1px solid #bacfd4;border-radius:9px;">
            </label>

            <label>
                <strong>Publication Category</strong>
                <select name="category"
                        style="display:block;width:100%;padding:12px;border:1px solid #bacfd4;border-radius:9px;">

                    <option value="">Select Category</option>

                    @foreach([
                        'Marine Science',
                        'Aquatic Science',
                        'Blue Economy',
                        'Climate Change',
                        'Water Conservation',
                        'Policy Briefs',
                        'Technical Reports',
                        'Gender & Leadership',
                        'Research Papers',
                        'Other'
                    ] as $category)
                        <option value="{{ $category }}"
                            {{ old('category') === $category ? 'selected' : '' }}>
                            {{ $category }}
                        </option>
                    @endforeach
                </select>
            </label>

            <label>
                <strong>Publication Date</strong>
                <input type="date"
                       name="publication_date"
                       value="{{ old('publication_date') }}"
                       style="display:block;width:100%;box-sizing:border-box;padding:12px;border:1px solid #bacfd4;border-radius:9px;">
            </label>

            <label>
                <strong>Publication Description *</strong>
                <textarea name="description"
                          rows="5"
                          required
                          maxlength="5000"
                          style="display:block;width:100%;box-sizing:border-box;padding:12px;border:1px solid #bacfd4;border-radius:9px;">{{ old('description') }}</textarea>
            </label>

            <label>
                <strong>PDF Document * (Maximum 20 MB)</strong>
                <input type="file"
                       name="pdf"
                       accept=".pdf,application/pdf"
                       required>
            </label>

            <label>
                <strong>Cover Image * (Maximum 5 MB)</strong>
                <input type="file"
                       name="cover"
                       accept="image/jpeg,image/png,image/webp"
                       required>
            </label>

            <label style="display:flex;align-items:center;gap:10px;">
                <input type="checkbox"
                       name="publish"
                       value="1"
                       {{ old('publish') ? 'checked' : '' }}>
                <strong>Publish immediately</strong>
            </label>

            <button type="submit"
                    style="cursor:pointer;border:0;border-radius:30px;padding:13px 28px;background:#087f9c;color:white;font-weight:700;justify-self:start;">
                Save Publication
            </button>

        </form>
    </section>

    <section style="background:white;padding:24px;border:1px solid #dcebed;border-radius:18px;">

        <h2 style="font-size:23px;color:#052f43;">
            Uploaded Publications
        </h2>

        <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;min-width:750px;">

                <thead>
                    <tr>
                        <th style="text-align:left;padding:12px;">Publication</th>
                        <th style="text-align:left;padding:12px;">Status</th>
                        <th style="text-align:left;padding:12px;">Featured</th>
                        <th style="text-align:left;padding:12px;">Date</th>
                        <th style="text-align:left;padding:12px;">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($publications as $publication)
                        <tr style="border-top:1px solid #e0e9eb;">

                            <td style="padding:12px;">
                                <strong>{{ $publication->title }}</strong>
                                <div>{{ $publication->author }}</div>
                                <small>{{ $publication->category }}</small>
                            </td>

                            <td style="padding:12px;">
                                {{ $publication->is_published ? 'Published' : 'Draft' }}
                            </td>

                            <td style="padding:12px;">
                                {{ $publication->is_featured ? 'Yes' : 'No' }}
                            </td>

                            <td style="padding:12px;">
                                {{ $publication->publication_date?->format('d M Y') ?? 'Not specified' }}
                            </td>

                            <td style="padding:12px;">

                                <form action="{{ route('admin.publications.status', $publication) }}"
                                      method="POST"
                                      style="display:inline-block;margin:4px;">
                                    @csrf
                                    @method('PATCH')

                                    <input type="hidden"
                                           name="publish"
                                           value="{{ $publication->is_published ? 0 : 1 }}">

                                    <button type="submit">
                                        {{ $publication->is_published ? 'Unpublish' : 'Publish' }}
                                    </button>
                                </form>

                                @if($publication->is_published && !$publication->is_featured)
                                    <form action="{{ route('admin.publications.feature', $publication) }}"
                                          method="POST"
                                          style="display:inline-block;margin:4px;">
                                        @csrf
                                        @method('PATCH')

                                        <button type="submit">
                                            Feature
                                        </button>
                                    </form>
                                @endif

                                <form action="{{ route('admin.publications.destroy', $publication) }}"
                                      method="POST"
                                      onsubmit="return confirm('Permanently delete this publication and its uploaded files?')"
                                      style="display:inline-block;margin:4px;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit">
                                        Delete
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="padding:18px;">
                                No publications uploaded yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div style="margin-top:20px;">
            {{ $publications->links() }}
        </div>

    </section>

</div>

@endsection
