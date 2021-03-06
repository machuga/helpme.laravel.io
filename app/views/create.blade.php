<form class="create-paste" action="/" method="post" accept-charset="utf-8">
    <ol>
        <li>
            <h3>Question/Problem Description</h3>
            <textarea name="paste[problem]"></textarea>
        </li>
        <li>
            <h3>Which Version of Laravel?</h3>
            <select name="paste[version]">
                <option value="4.2">4.2.x</option>
                <option value="4.1">4.1.x</option>
                <option value="4.0" selected="selected">4.0.x</option>
                <option value="3.x">3.x</option>
            </select>
        </li>
        <li>
            <h3>What behavior are you expecting?</h3>
            <textarea name="paste[expected]"></textarea>
        </li>
        <li>
            <h3>What behavior are you actually receiving?</h3>
            <textarea name="paste[actual]"></textarea>
        </li>
        <li>
            <h3>Paste any errors, exceptions, or stacktraces</h3>
            <textarea name="paste[errors]"></textarea>
        </li>
        <li>
            <h3>
                Related Files (Controllers, Models, Views, Helpers,
                Routes, etc.)
            </h3>
            <section class="files" id="files">
                <article class="file">
                    <div class="form">
                        <p>
                            <label>Type of File</label>
                            <select name="paste[file][0][file_type]">
                                @foreach ($fileTypes as $key => $name)
                                    <option val="{{ $key }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </p>
                        <p>
                            <label>File Name</label>
                            <input type="input" name="paste[file][0][name]" placeholder="Filename.php (optional)">
                        </p>
                        <p>
                            <label>Code</label>
                            <textarea name="paste[file][0][code]"></textarea>
                        </p>
                    </div>
                    <div class="controls">
                    </div>
                </article>
            </section>
            <button class="button" type="button" id="add-file">Add Another File</button>
        </li>
        <li>
            <h3>What is the name of this framework? (checking that you're indeed human)</h3>
            <input name="check1" value="" type="hidden" />
            <input type="text" name="check2" />
        </li>
    </ol>
    <p class="form-controls">
        <input class="button" type="submit" value="Save Paste">
    </p>
</form>

<script type="text/template" id="file-template">
    <div class="form">
        <p>
            <label>Type of File</label>
            <select name="paste[file][<%= id %>][file_type]">
                @foreach ($fileTypes as $key => $name)
                    <option val="{{ $key }}">{{ $name }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label>File Name</label>
            <input type="input" name="paste[file][<%= id %>][name]" placeholder="Filename.php (optional)">
        </p>
        <p>
            <label>Code</label>
            <textarea name="paste[file][<%= id %>][code]"></textarea>
        </p>
    </div>
    <div class="controls">
        <button type="button" class="button remove-file">&times;</button>
    </div>
</script>

@section('javascripts')
<script src="/javascripts/create.js"></script>
@stop
