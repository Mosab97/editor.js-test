<!DOCTYPE html>
<html>
<head>
    {{--    <script src="https://cdn.tiny.cloud/1/k4u8fmnfkhnrepw66rco7jqwktwwo672al3lg8dyltejyi7y/tinymce/5/tinymce.min.js"--}}
    {{--            referrerpolicy="origin"></script>--}}
</head>
<body>
<div style="height: 100px !important;overflow: auto">
    <div id="editorjsHeader"></div>
</div>
<hr>
<hr>
<div style="height: 800px !important;overflow: auto">
    <div id="editorjs"></div>
</div>
<hr>
<hr>
<div style="height: 100px !important;overflow: auto">
    <div id="editorjsFooter"></div>
</div>
<hr>
{{--<textarea>--}}
{{--    Welcome to TinyMCE!--}}
{{--  </textarea>--}}
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/codex.editor.header@2.0.4/dist/bundle.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/link@2.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/raw"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@2.0.2"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/editorjs-paragraph-with-alignment@3.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-text-alignment-blocktune@latest"></script>
<script>
    // let config = {
    //     holder: 'editorjs',
    //     tools: {
    //         header: {
    //             class: Header,
    //             shortcut: 'CMD+SHIFT+H',
    //             tunes: ['anyTuneName'],
    //             config: {
    //                 placeholder: 'Enter a header',
    //                 levels: [2, 3, 4],
    //                 defaultLevel: 3
    //             }
    //         },
    //         paragraph: {
    //             class: Paragraph,
    //             inlineToolbar: true,
    //         },
    //         // paragraph: {
    //         //     class: Paragraph,
    //         //     inlineToolbar: false,
    //         //     tunes: ['anyTuneName'],
    //         // },
    //         anyTuneName: {
    //             class: 'AlignmentTuneTool',
    //             config: {
    //                 default: "right",
    //                 blocks: {
    //                     header: 'center',
    //                     list: 'right'
    //                 }
    //             },
    //         },
    //         list: {
    //             class: List,
    //             shortcut: 'CMD+SHIFT+L',
    //             inlineToolbar: true,
    //         },
    //         // linkTool: {
    //         //     // class: LinkTool,
    //         //     config: {
    //         //         endpoint: 'http://localhost:8008/fetchUrl', // Your backend endpoint for url data fetching,
    //         //     }
    //         // }
    //         //...
    //
    //         raw: RawTool,
    //         // image: SimpleImage,
    //         image: {
    //             class: ImageTool,
    //             config: {
    //                 endpoints: {
    //                     byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
    //                     byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
    //                 }
    //             }
    //         },
    //         checklist: {
    //             class: Checklist,
    //             inlineToolbar: true,
    //         },
    //         embed: Embed,
    //         quote: {
    //             class: Quote,
    //             inlineToolbar: true,
    //             shortcut: 'CMD+SHIFT+O',
    //             config: {
    //                 quotePlaceholder: 'Enter a quote',
    //                 captionPlaceholder: 'Quote\'s author',
    //             },
    //         },
    //     },
    //     actions: [
    //         {
    //             name: 'new_button',
    //             icon: '<svg>...</svg>',
    //             title: 'New Button',
    //             action: (name) => {
    //                 alert(`${name} button clicked`);
    //                 return false;
    //             }
    //         }
    //     ]
    // };
    // let editorjsHeader = config;
    // editorjsHeader.holder = 'editorjsHeader';
    // let editorjsFooter = config;
    // editorjsFooter.holder = 'editorjsFooter';
    new EditorJS( {
        holder: 'editorjs',
        tools: {
            header: {
                class: Header,
                shortcut: 'CMD+SHIFT+H',
                // tunes: ['anyTuneName'],
                config: {
                    placeholder: 'Enter a header',
                    levels: [2, 3, 4,5,6],
                    defaultLevel: 3
                }
            },
            paragraph: {
                class: Paragraph,
                inlineToolbar: true,
            },
            // paragraph: {
            //     class: Paragraph,
            //     inlineToolbar: false,
            //     tunes: ['anyTuneName'],
            // },
            anyTuneName: {
                class: 'AlignmentTuneTool',
                config: {
                    default: "right",
                    blocks: {
                        header: 'center',
                        list: 'right'
                    }
                },
            },
            list: {
                class: List,
                shortcut: 'CMD+SHIFT+L',
                inlineToolbar: true,
            },
            // linkTool: {
            //     // class: LinkTool,
            //     config: {
            //         endpoint: 'http://localhost:8008/fetchUrl', // Your backend endpoint for url data fetching,
            //     }
            // }
            //...

            raw: RawTool,
            // image: SimpleImage,
            image: {
                class: ImageTool,
                config: {
                    endpoints: {
                        byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
                        byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
                    }
                }
            },
            checklist: {
                class: Checklist,
                inlineToolbar: true,
            },
            embed: Embed,
            quote: {
                class: Quote,
                inlineToolbar: true,
                shortcut: 'CMD+SHIFT+O',
                config: {
                    quotePlaceholder: 'Enter a quote',
                    captionPlaceholder: 'Quote\'s author',
                },
            },
        },
        actions: [
            {
                name: 'new_button',
                icon: '<svg>...</svg>',
                title: 'New Button',
                action: (name) => {
                    alert(`${name} button clicked`);
                    return false;
                }
            }
        ]
    });
    new EditorJS( {
        holder: 'editorjsHeader',
        tools: {
            header: {
                class: Header,
                shortcut: 'CMD+SHIFT+H',
                tunes: ['anyTuneName'],
                config: {
                    placeholder: 'Enter a header',
                    levels: [2, 3, 4],
                    defaultLevel: 3
                }
            },
            paragraph: {
                class: Paragraph,
                inlineToolbar: true,
            },
            // paragraph: {
            //     class: Paragraph,
            //     inlineToolbar: false,
            //     tunes: ['anyTuneName'],
            // },
            anyTuneName: {
                class: 'AlignmentTuneTool',
                config: {
                    default: "right",
                    blocks: {
                        header: 'center',
                        list: 'right'
                    }
                },
            },
            list: {
                class: List,
                shortcut: 'CMD+SHIFT+L',
                inlineToolbar: true,
            },
            // linkTool: {
            //     // class: LinkTool,
            //     config: {
            //         endpoint: 'http://localhost:8008/fetchUrl', // Your backend endpoint for url data fetching,
            //     }
            // }
            //...

            raw: RawTool,
            // image: SimpleImage,
            image: {
                class: ImageTool,
                config: {
                    endpoints: {
                        byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
                        byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
                    }
                }
            },
            checklist: {
                class: Checklist,
                inlineToolbar: true,
            },
            embed: Embed,
            quote: {
                class: Quote,
                inlineToolbar: true,
                shortcut: 'CMD+SHIFT+O',
                config: {
                    quotePlaceholder: 'Enter a quote',
                    captionPlaceholder: 'Quote\'s author',
                },
            },
        },
        actions: [
            {
                name: 'new_button',
                icon: '<svg>...</svg>',
                title: 'New Button',
                action: (name) => {
                    alert(`${name} button clicked`);
                    return false;
                }
            }
        ]
    });
    new EditorJS( {
        holder: 'editorjsFooter',
        tools: {
            header: {
                class: Header,
                shortcut: 'CMD+SHIFT+H',
                tunes: ['anyTuneName'],
                config: {
                    placeholder: 'Enter a header',
                    levels: [2, 3, 4],
                    defaultLevel: 3
                }
            },
            paragraph: {
                class: Paragraph,
                inlineToolbar: true,
            },
            // paragraph: {
            //     class: Paragraph,
            //     inlineToolbar: false,
            //     tunes: ['anyTuneName'],
            // },
            anyTuneName: {
                class: 'AlignmentTuneTool',
                config: {
                    default: "right",
                    blocks: {
                        header: 'center',
                        list: 'right'
                    }
                },
            },
            list: {
                class: List,
                shortcut: 'CMD+SHIFT+L',
                inlineToolbar: true,
            },
            // linkTool: {
            //     // class: LinkTool,
            //     config: {
            //         endpoint: 'http://localhost:8008/fetchUrl', // Your backend endpoint for url data fetching,
            //     }
            // }
            //...

            raw: RawTool,
            // image: SimpleImage,
            image: {
                class: ImageTool,
                config: {
                    endpoints: {
                        byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
                        byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
                    }
                }
            },
            checklist: {
                class: Checklist,
                inlineToolbar: true,
            },
            embed: Embed,
            quote: {
                class: Quote,
                inlineToolbar: true,
                shortcut: 'CMD+SHIFT+O',
                config: {
                    quotePlaceholder: 'Enter a quote',
                    captionPlaceholder: 'Quote\'s author',
                },
            },
        },
        actions: [
            {
                name: 'new_button',
                icon: '<svg>...</svg>',
                title: 'New Button',
                action: (name) => {
                    alert(`${name} button clicked`);
                    return false;
                }
            }
        ]
    });

    // tinymce.init({
    //     selector: 'textarea',
    //     plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    //     toolbar_mode: 'floating',
    // });
</script>
</body>
</html>
