<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<!-- Header -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<!-- Image -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>
<!-- Delimiter -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<!-- List -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
<!-- Checklist -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<!-- Quote -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/code@latest"></script>
<!-- Code -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<!-- Embed -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script>
<!-- Table -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>
<!-- Link -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/warning@latest"></script>
<!-- Warning -->

<script src="https://cdn.jsdelivr.net/npm/@editorjs/marker@latest"></script>
<!-- Marker -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/inline-code@latest"></script>
<!-- Inline Code -->

<!-- Load Editor.js's Core -->
<script src="../script/editor.js"></script>

<!-- Initialization -->
<script>
  /**
   * Saving button
   */
  const saveButton = document.getElementById("save-button");

  /**
   * To initialize the Editor, create a new instance with configuration object
   * @see docs/installation.md for mode details
   */
  var editor = new EditorJS({
    /**
     * Wrapper of Editor
     */
    holder: "editorjs",
    /**
     * Tools list
     */
    tools: {
      /**
       * Each Tool is a Plugin. Pass them via 'class' option with necessary settings {@link docs/tools.md}
       */
      header: {
        class: Header,
        inlineToolbar: ["link"],
        config: {
          placeholder: "Cabeçalho"
        },
        shortcut: "CMD+SHIFT+H"
      },

      /**
       * Or pass class directly without any configuration
       */
      image: {
        class: SimpleImage,
        inlineToolbar: ["link"]
      },

      list: {
        class: List,
        inlineToolbar: true,
        shortcut: "CMD+SHIFT+L"
      },

      // checklist: {
      //   class: Checklist,
      //   inlineToolbar: true
      // },

      quote: {
        class: Quote,
        inlineToolbar: true,
        config: {
          quotePlaceholder: "Citação",
          captionPlaceholder: "Autor"
        },
        shortcut: "CMD+SHIFT+O"
      },

      warning: Warning,

      // marker: {
      //   class: Marker,
      //   shortcut: "CMD+SHIFT+M"
      // },

      // code: {
      //   class: CodeTool,
      //   shortcut: "CMD+SHIFT+C"
      // },

      delimiter: Delimiter,

      // inlineCode: {
      //   class: InlineCode,
      //   shortcut: "CMD+SHIFT+C"
      // },

      linkTool: LinkTool,

      embed: Embed,

      table: {
        class: Table,
        inlineToolbar: true,
        shortcut: "CMD+ALT+T"
      }
    },
    onReady: function() {
      saveButton.click();
    },
    onChange: function() {
      console.log("Algo foi alterado");
    }
  });

  /**
   * Saving example
   */
  saveButton.addEventListener("click", function() {
    editor.save().then(savedData => {
      console.log(document.getElementById("output"));
    });
  });
</script>