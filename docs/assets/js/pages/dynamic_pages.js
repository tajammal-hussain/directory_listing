const editor = grapesjs.init({
    container: "#gjs",
    fromElement: true,
    width: "full",
    StorageManager: false,
    canvas: {
        styles: [
          'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
        ],
        scripts: [
          'https://code.jquery.com/jquery-3.3.1.slim.min.js',
          'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
          'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'
        ],
      }
  });

//   adding my first custom block
  editor.BlockManager.add(
    "bootstrap-button",{
        label:"Button",
        content:
        `<a class="btn btn-primary" href="#" role="button">
        Button
        </a>`,
        category:"Buttons"
    }
  )