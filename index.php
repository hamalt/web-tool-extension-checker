<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# website: http://ogp.me/ns/websaite#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ファイルの拡張子を調べるWebツール | .拡張子調べ隊</title>
    <meta name="description" content="ブラウザからファイルの拡張子を調べたい人向けのWeb（ツール）部隊です。">
    <meta property="og:url" content="https://extchecker.increment-log.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ファイルの拡張子を調べるWebツール | .拡張子調べ隊" />
    <meta property="og:description" content="ブラウザからファイルの拡張子を調べたい人向けのWeb（ツール）部隊です。" />
    <meta property="og:site_name" content=".拡張子調べ隊" />
    <meta property="og:image" content="https://extchecker.increment-log.com/assets/images/ogp_default.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@s_ryone" />
    <meta name="twitter:creator" content="@s_ryone" />
    <meta name="twitter:image" content="https://extchecker.increment-log.com/assets/images/ogp_default.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css?ver=1.0">
</head>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h1 class="masthead h3 text-center">拡張子調べ隊</h1>
        </div>
    </header>

    <main role="main" class="inner cover">
        <?php
        $file_name = filter_input(INPUT_POST, 'file_name', FILTER_SANITIZE_SPECIAL_CHARS );
        
        if ( $file_name ) :
            $extension = substr( $file_name, strrpos( $file_name, '.' ) + 1 );
            ?>
            <div class="jumbotron bg-success">
                <h1 class="display-4">拡張子: <?php echo htmlspecialchars( $extension, ENT_QUOTES, "UTF-8" ); ?></h1>
            </div>
            <hr class="my-4">
        <?php endif; ?>
        
        <p class="cover-heading">拡張子を調べたいファイルを選択</p>
        
        <form action="" method="post">
            <div class="form-group">
                <div class="mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="file_name">
                        <label class="custom-file-label" for="customFile">ファイルを選択</label>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">※ファイルはサーバーに保存しません。</small>
                    <small id="emailHelp" class="form-text text-muted">※ファイル名に拡張子が無いと調査できません。</small>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">拡張子を調査</button>
        </form>
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p class="text-center">© 2019 <a href="https://increment-log.com/" target="_blank">increment Log</a>.</p>
        </div>
    </footer>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>
</body>
</html>