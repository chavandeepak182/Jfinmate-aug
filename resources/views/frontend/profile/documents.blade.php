
@extends('frontend.layouts.customer-dash')

@section('title','Documents')

@section('content')

<style>
    .documents-page {
        padding: 5px 0 35px;
    }

    .documents-heading {
        font-size: 20px;
        font-weight: 600;
        color: #444444;
        margin-bottom: 20px;
    }

    /* Upload Card */
    .document-upload-card {
        background: #fff;
        border: none;
        border-radius: 12px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .upload-layout {
        display: grid;
        grid-template-columns: 1.15fr 1fr;
        gap: 28px;
        align-items: center;
    }

    /* Drag and Drop */
    .upload-dropzone {
        min-height: 178px;
        border: 1px solid #1685ff;
        border-radius: 6px;
        background: #f7f9fd;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: .3s;
        padding: 20px;
        text-align: center;
    }

    .upload-dropzone:hover,
    .upload-dropzone.dragover {
        background: #edf6ff;
        border-color: #006cff;
    }

    .upload-dropzone i {
        font-size: 35px;
        color: #999;
        margin-bottom: 10px;
    }

    .upload-dropzone p {
        font-size: 12px;
        color: #777;
        margin-bottom: 5px;
    }

    .upload-dropzone small {
        font-size: 11px;
        color: #999;
        margin-bottom: 10px;
    }

    .browse-btn {
        border: 1px solid #1685ff;
        background: transparent;
        color: #1685ff;
        border-radius: 5px;
        padding: 5px 16px;
        font-size: 11px;
    }

    .browse-btn:hover {
        background: #1685ff;
        color: #fff;
    }

    .selected-file-name {
        font-size: 11px;
        color: #087cff;
        margin-top: 8px;
        word-break: break-all;
    }

    /* Upload Form */
    .upload-fields {
        padding: 10px 5px;
    }

    .upload-fields label {
        font-size: 16px;
        color: #444444;
        margin-bottom: 6px;
    }

    .upload-fields .form-control {
        height: 35px;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        font-size: 13px;
        box-shadow: none;
    }

    .upload-btn {
        background: #1685ff;
        color: #fff;
        border: none;
        padding: 7px 17px;
        border-radius: 6px;
        font-size: 16px;
        margin-top: 10px;
    }

    .upload-btn:hover {
        background: #086bd5;
        color: #fff;
    }

    /* Document List */
   .document-list-heading {
    font-size: 20px;
    font-weight: 600;
    color: #444444;
    line-height: 100%;
    font-family: figtree;
    margin: 18px 0 13px;
}
    .document-list-card {
        background: #fff;
        border-radius: 11px;
        padding: 15px;
        min-height: 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        height:102px;
        width: 564px;
        box-shadow: 0 2px 10px rgba(30, 64, 175, .035);
        transition: .3s;
    }

    .document-list-card:hover {
        box-shadow: 0 4px 15px rgba(30, 64, 175, .09);
        transform: translateY(-2px);
    }

    .document-info {
        display: flex;
        align-items: center;
        gap: 11px;
        min-width: 0;
    }

    .document-icon {
    width: 54px;
    height: 54px;
    min-width: 32px;
    background: linear-gradient(135deg, #319aff, #0875f9);
    color: #fff;
    border-radius: 6px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 19px;
}
    .document-details {
        min-width: 0;
    }

    .document-details h6 {
    font-size: 18px;
    font-weight: 600;
    color: #444444;
    line-height: 100%;
    font-family: figtree;
    margin: 0 0 3px;
    line-height: 100%;
    overflow-wrap: anywhere;
}

   .document-details small {
    display: block;
    color: #444444;
    font-size: 14px;
    font-weight: 400;
    line-height: 100%;
    font-family: figtree;
    margin: 0;
}

    /* Action Buttons */
    .document-actions {
        display: flex;
        align-items: center;
        gap: 5px;
        flex-shrink: 0;
    }

    .document-action-btn {
        width: 40px;
        height: 40px;
        border: 1px solid #1685ff;
        color: #1685ff;
        background: #fff;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 15px;
        cursor: pointer;
        transition: .2s;
        padding: 0;
    }

    .document-action-btn:hover {
        background: #1685ff;
        color: #fff;
    }

    .empty-documents {
        background: #fff;
        border-radius: 10px;
        padding: 35px 15px;
        text-align: center;
        color: #888;
        font-size: 13px;
    }

    .empty-documents i {
        font-size: 30px;
        color: #1685ff;
        margin-bottom: 10px;
    }

    /* Modal */
    .replace-modal .modal-content {
        border: 0;
        border-radius: 12px;
    }

    .replace-modal .modal-header {
        border-bottom: 1px solid #eee;
    }

    @media(max-width: 767px) {
        .upload-layout {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .upload-dropzone {
            min-height: 150px;
        }

        .upload-fields {
            padding: 5px;
        }
    }

    @media(max-width: 420px) {
        .document-list-card {
            padding: 11px;
            gap: 7px;
        }

        .document-actions {
            gap: 3px;
        }

        .document-action-btn {
            width: 26px;
            height: 26px;
        }
    }
</style>

<div class="container-fluid documents-page">

    {{-- PAGE HEADING --}}
    <h5 class="documents-heading">Upload Documents</h5>

    {{-- UPLOAD FORM --}}
    <form action="{{ route('loan.update_documents') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="document-upload-card">

            <div class="upload-layout">

                {{-- LEFT: FILE UPLOAD --}}
                <div>

                    <div class="upload-dropzone" id="uploadDropzone">

                        <i class="fas fa-cloud-upload-alt"></i>

                        <p>Drag and drop here</p>

                        <small>or</small>

                        <button type="button" class="browse-btn">
                            Browse Files
                        </button>

                        <div class="selected-file-name" id="selectedFileName">
                        </div>

                        <input type="file"
                               name="documents[0][file]"
                               id="documentFile"
                               accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"
                               required
                               hidden>

                    </div>

                    @error('documents.0.file')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                {{-- RIGHT: DOCUMENT NAME --}}
                <div class="upload-fields">

                    <label>Add Document Name</label>

                    <input type="text"
                           name="documents[0][document_name]"
                           class="form-control"
                           placeholder="Type document name"
                           required>

                    @error('documents.0.document_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <button type="submit" class="upload-btn">
                        Upload
                    </button>

                </div>

            </div>

        </div>

    </form>


    {{-- DOCUMENT LIST --}}
    <h5 class="document-list-heading">Document List</h5>

    <div class="row g-3">

        @forelse($documents as $doc)

            <div class="col-md-6">

                <div class="document-list-card">

                    {{-- DOCUMENT INFORMATION --}}
                    <div class="document-info">

                        <div class="document-icon">
                            <i class="far fa-file-alt"></i>
                        </div>

                        <div class="document-details">

                            <h6>{{ $doc->document_name }}</h6>

                            <small>
                                Uploaded on
                                {{ !empty($doc->created_at)
                                    ? \Carbon\Carbon::parse($doc->created_at)->format('M d, Y')
                                    : '-' }}
                            </small>

                        </div>

                    </div>

                    {{-- ACTION BUTTONS --}}
                    <div class="document-actions">

                        {{-- PREVIEW --}}
                        <a href="{{ asset('storage/'.$doc->file_path) }}"
                           target="_blank"
                           class="document-action-btn"
                           title="Preview">

                            <i class="far fa-eye"></i>

                        </a>

                        {{-- DOWNLOAD --}}
                        <a href="{{ asset('storage/'.$doc->file_path) }}"
                           download
                           class="document-action-btn"
                           title="Download">

                            <i class="fas fa-download"></i>

                        </a>

                        {{-- REPLACE --}}
                        <button type="button"
                                class="document-action-btn"
                                title="Replace"
                                data-bs-toggle="modal"
                                data-bs-target="#replaceDocModal{{ $doc->document_id }}">

                            <i class="fas fa-sync-alt"></i>

                        </button>

                    </div>

                </div>

            </div>


            {{-- REPLACE DOCUMENT MODAL --}}
            <div class="modal fade replace-modal"
                 id="replaceDocModal{{ $doc->document_id }}"
                 tabindex="-1">

                <div class="modal-dialog modal-dialog-centered">

                    <form method="POST"
                          action="{{ route('loan.replaceDocument', $doc->document_id) }}"
                          enctype="multipart/form-data">

                        @csrf

                        <div class="modal-content">

                            <div class="modal-header">

                                <h5 class="modal-title">
                                    Replace Document
                                </h5>

                                <button type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal">
                                </button>

                            </div>

                            <div class="modal-body">

                                <p>
                                    Document:
                                    <strong>{{ $doc->document_name }}</strong>
                                </p>

                                <input type="file"
                                       name="file"
                                       class="form-control"
                                       accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"
                                       required>

                            </div>

                            <div class="modal-footer">

                                <button type="button"
                                        class="btn btn-light"
                                        data-bs-dismiss="modal">
                                    Cancel
                                </button>

                                <button type="submit"
                                        class="btn btn-primary">
                                    Replace
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="empty-documents">

                    <i class="far fa-folder-open d-block"></i>

                    No documents uploaded yet.

                </div>

            </div>

        @endforelse

    </div>

</div>


{{-- DRAG AND DROP FUNCTIONALITY --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    const dropzone = document.getElementById('uploadDropzone');
    const fileInput = document.getElementById('documentFile');
    const fileName = document.getElementById('selectedFileName');
    const browseButton = dropzone.querySelector('.browse-btn');

    // Browse files
    browseButton.addEventListener('click', function (e) {
        e.stopPropagation();
        fileInput.click();
    });

    // Click anywhere on upload area
    dropzone.addEventListener('click', function () {
        fileInput.click();
    });

    // Display selected file
    function displayFile(file) {
        if (!file) return;

        fileName.textContent = file.name;
    }

    fileInput.addEventListener('change', function () {
        displayFile(this.files[0]);
    });

    // Prevent browser default drag behavior
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {

        dropzone.addEventListener(eventName, function (e) {
            e.preventDefault();
            e.stopPropagation();
        });

    });

    // Drag over styling
    ['dragenter', 'dragover'].forEach(eventName => {

        dropzone.addEventListener(eventName, function () {
            dropzone.classList.add('dragover');
        });

    });

    ['dragleave', 'drop'].forEach(eventName => {

        dropzone.addEventListener(eventName, function () {
            dropzone.classList.remove('dragover');
        });

    });

    // Drop file
    dropzone.addEventListener('drop', function (e) {

        const files = e.dataTransfer.files;

        if (files.length > 0) {

            const dataTransfer = new DataTransfer();

            dataTransfer.items.add(files[0]);

            fileInput.files = dataTransfer.files;

            displayFile(files[0]);

        }

    });

});
</script>

@endsection
