<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .bdlms-customization-tab {
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .bdlms-customization-tab .nav-tabs {
            display: flex;
            flex-direction: column;
            width: 30%;
            background-color: #fff;
            padding: 0;
            border: 1px solid #bbbcbf;
        }

        .bdlms-customization-tab .nav-tabs .nav-item {
            width: 100%;
            margin: 0;
        }

        .bdlms-customization-tab .nav-tabs .nav-item .nav-link {
            padding: 12px 30px 12px 15px;
            font-size: 14px;
            background-color: #fff;
            color: #5f5f5f;
            outline: none;
            cursor: pointer;
            font-weight: 400;
            line-height: 1.3;
            text-align: left;
            width: 100%;
            border: 0;
            border-top: 1px solid #bbbcbf;
            position: relative;
        }

        .bdlms-customization-tab .nav-tabs .nav-item .nav-link::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            background-image: url("data:image/svg+xml,%3Csvg width='9' height='15' viewBox='0 0 9 15' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0.9375 12.5391L5.97656 7.5L0.9375 2.46094L1.94531 0.445312L9 7.5L1.94531 14.5547L0.9375 12.5391Z' fill='%23A0A5AA'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: calc(100% - 15px);
        }

        .bdlms-customization-tab .nav-tabs .nav-item .nav-link:hover,
        .bdlms-customization-tab .nav-tabs .nav-item .nav-link.active {
            background-color: #e8e8e8;
            font-weight: 600;
            color: #23282d;
        }

        .bdlms-customization-tab .nav-tabs .nav-item .nav-link.active::after {
            background-image: url('data:image/svg+xml;utf8,<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.9375 12.5391L5.97656 7.5L0.9375 2.46094L1.94531 0.445312L9 7.5L1.94531 14.5547L0.9375 12.5391Z" fill="%23A23282" fill-opacity="0.866667"/></svg>');
        }

        .bdlms-customization-tab .nav-tabs .nav-item:first-child .nav-link {
            border: 0;
        }

        .bdlms-customization-tab .tab-content {
            width: 70%;
            padding: 20px;
            background-color: #eeeeef;
            border: 1px solid #bbbcbf;
            border-left: none;
        }

        .bdlms-customization-tab .tab-content .tab-pane {
            display: none;
            width: 100%;
        }

        .bdlms-customization-tab .tab-content .tab-pane.active {
            display: block;
        }

        .bdlms-customization-tab .tab-content .tab-content-wrap .tab-title {
            font-size: 16px;
            font-weight: 600;
            line-height: 1.3;
            color: #23282d;
            padding-bottom: 20px;
        }

        .tab-content-row {
            display: flex;
            gap: 30px;
        }

        .tab-content-row .font-prop-selector {
            width: 30%;
        }

        .tab-content-row .font-prop-selector ul {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .tab-content-row .font-prop-selector ul .bdlms-form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .tab-content-row .font-preview-screen {
            width: 70%;
            padding: 20px;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
        }

        .tab-content-row .font-preview-screen .title {
            font-size: 12px;
            line-height: 16px;
            text-align: center;
            color: #484547;
        }

        .tab-content-row .font-preview-screen .preview-text {
            text-align: center;
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
            font-size: 42px;
            line-height: 1.2;
            color: #101011;
        }

        @media (max-width: 991px) {
            .bdlms-customization-tab .tab-content {
                width: 100%;
            }

            .bdlms-customization-tab .nav-tabs {
                width: 100%;
            }

            .bdlms-customization-tab {
                flex-direction: column;
            }

            .nav-tabs {
                display: none;
            }

            /* Display tab content as accordion headers */
            .tab-title {
                cursor: pointer;
                padding: 10px;
                background-color: #f5f5f5;
                border: 1px solid #ddd;
                margin-top: 5px;
            }

            /* Hide content initially */
            .tab-content-wrap {
                display: none;
                padding: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
                border-top: none;
            }

            /* Active state for accordion content */
            .tab-content-wrap.active {
                display: block;
            }



        }
    </style>
</head>

<body>

    <div class="bdlms-customization-tab">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="heading-1-tab" data-tab="heading-1" type="button" role="tab" aria-controls="heading-1" aria-selected="true">Heading 1</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="heading-2-tab" data-tab="heading-2" type="button" role="tab" aria-controls="heading-2" aria-selected="false">Heading 2</button>
            </li>
        </ul>


        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="heading-1" role="tabpanel" aria-labelledby="heading-1-tab" tabindex="0">
                <div class="tab-content-wrap">
                    <div class="tab-title">Heading 1</div>
                    <div class="tab-content-row">
                        <div class="font-prop-selector">
                            <!-- <form> -->
                            <ul>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="font-family-h1">Font Family (Google Fonts)</label>
                                        <select class="form-select" data-style="fontFamily" data-target="preview-h1" id="font-family-h1">
                                            <option selected>Default</option>
                                            <option value="cursive">cursive</option>
                                            <option value="sans-serif">sans-serif</option>
                                            <option value="serif">serif</option>
                                            <option value="system-ui">system-ui</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="font-weight-h1">Font Weight</label>
                                        <select class="form-select" data-style="fontWeight" data-target="preview-h1" id="font-weight-h1">
                                            <option selected>Default</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                            <option value="600">600</option>
                                            <option value="700">700</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="font-size-h1">Font Size</label>
                                        <select class="form-select" data-style="fontSize" data-target="preview-h1" id="font-size-h1">
                                            <option selected>Default</option>
                                            <option value="16px">16px</option>
                                            <option value="18px">18px</option>
                                            <option value="20px">20px</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="text-transform-h1">Text Transform</label>
                                        <select class="form-select" data-style="textTransform" data-target="preview-h1" id="text-transform-h1">
                                            <option selected>Default</option>
                                            <option value="none">none</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="line-height-h1">Line Height</label>
                                        <select class="form-select" data-style="lineHeight" data-target="preview-h1" id="line-height-h1">
                                            <option selected>Default</option>
                                            <option value="normal">normal</option>
                                            <option value="1">1</option>
                                            <option value="1.2">1.2</option>
                                            <option value="1.5">1.5</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="letter-spacing-h1">Letter Spacing</label>
                                        <select class="form-select" data-style="letterSpacing" data-target="preview-h1" id="letter-spacing-h1">
                                            <option selected>Default</option>
                                            <option value="normal">normal</option>
                                            <option value="1px">1px</option>
                                            <option value="2px">2px</option>
                                            <option value="5px">5px</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="text-decoration-h1">Text Decoration</label>
                                        <select class="form-select" data-style="textDecoration" data-target="preview-h1" id="text-decoration-h1">
                                            <option selected>Default</option>
                                            <option value="none">none</option>
                                            <option value="line-through">line-through</option>
                                            <option value="overline">overline</option>
                                            <option value="underline">underline</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                            <!-- </form> -->
                        </div>
                        <div class="font-preview-screen">
                            <div class="title">Preview</div>
                            <div class="preview-text" id="preview-h1">
                                The quick brown fox jumps over the lazy dog
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="heading-2" role="tabpanel" aria-labelledby="heading-2-tab" tabindex="0">
                <div class="tab-content-wrap">
                    <div class="tab-title">Heading 2</div>
                    <div class="tab-content-row">
                        <div class="font-prop-selector">
                            <!-- <form> -->
                            <ul>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="font-family-h2">Font Family (Google Fonts)</label>
                                        <select class="form-select" data-style="fontFamily" data-target="preview-h2" id="font-family-h2">
                                            <option selected>Default</option>
                                            <option value="cursive">cursive</option>
                                            <option value="sans-serif">sans-serif</option>
                                            <option value="serif">serif</option>
                                            <option value="system-ui">system-ui</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="font-weight-h2">Font Weight</label>
                                        <select class="form-select" data-style="fontWeight" data-target="preview-h2" id="font-weight-h2">
                                            <option selected>Default</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                            <option value="600">600</option>
                                            <option value="700">700</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="font-size-h2">Font Size</label>
                                        <select class="form-select" data-style="fontSize" data-target="preview-h2" id="font-size-h2">
                                            <option selected>Default</option>
                                            <option value="16px">16px</option>
                                            <option value="18px">18px</option>
                                            <option value="20px">20px</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="text-transform-h2">Text Transform</label>
                                        <select class="form-select" data-style="textTransform" data-target="preview-h2" id="text-transform-h2">
                                            <option selected>Default</option>
                                            <option value="none">none</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="line-height-h2">Line Height</label>
                                        <select class="form-select" data-style="lineHeight" data-target="preview-h2" id="line-height-h2">
                                            <option selected>Default</option>
                                            <option value="normal">normal</option>
                                            <option value="1">1</option>
                                            <option value="1.2">1.2</option>
                                            <option value="1.5">1.5</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="letter-spacing-h2">Letter Spacing</label>
                                        <select class="form-select" data-style="letterSpacing" data-target="preview-h2" id="letter-spacing-h2">
                                            <option selected>Default</option>
                                            <option value="normal">normal</option>
                                            <option value="1px">1px</option>
                                            <option value="2px">2px</option>
                                            <option value="5px">5px</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="bdlms-form-group">
                                        <label for="text-decoration-h2">Text Decoration</label>
                                        <select class="form-select" data-style="textDecoration" data-target="preview-h2" id="text-decoration-h2">
                                            <option selected>Default</option>
                                            <option value="none">none</option>
                                            <option value="line-through">line-through</option>
                                            <option value="overline">overline</option>
                                            <option value="underline">underline</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                            <!-- </form> -->
                        </div>
                        <div class="font-preview-screen">
                            <div class="title">Preview</div>
                            <div class="preview-text" id="preview-h2">
                                The quick brown fox jumps over the lazy dog
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Add click event listeners to all tab buttons
        const tabButtons = document.querySelectorAll(".nav-tabs .nav-link");

        tabButtons.forEach((button) => {
            button.addEventListener("click", function(e) {
                e.preventDefault();

                const isActive = this.classList.contains("active");

                // Remove active class from all tabs and hide all content
                document.querySelectorAll(".nav-tabs .nav-link").forEach((tab) => {
                    tab.classList.remove("active");
                    tab.setAttribute("aria-selected", "false");
                });

                document.querySelectorAll(".tab-pane").forEach((content) => {
                    content.classList.remove("active");
                    content.style.display = "none";
                });

                // If the clicked tab was not active, activate it and show its content
                if (!isActive) {
                    this.classList.add("active");
                    this.setAttribute("aria-selected", "true");

                    const tabId = this.getAttribute("data-tab");
                    const tabContent = document.getElementById(tabId);
                    if (tabContent) {
                        tabContent.classList.add("active");
                        tabContent.style.display = "block";
                    }
                }
            });
        });

        // Trigger click on the first tab to show initial content
        document.querySelector(".nav-tabs .nav-link").click();
    </script>
</body>

</html>