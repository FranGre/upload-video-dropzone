@section('head')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@endsection

<form class="dropzone" id="my-awesome-dropzone"></form>

@section('scripts')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
    Dropzone.autoDiscover = false

    let myDropzone = new Dropzone('.dropzone', {
        url: "{{route('upload.video')}}",
        chunking: true,
        maxFilesize: 5 * 1024 * 1024* 1024,
        acceptedFiles: 'video/*',
        paramName: 'image',
        headers: {
            'X-CSRF-TOKEN': "{{csrf_token()}}"
        }
    })
</script>

@endsection