    <!-- main sidebar -->
    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide"><!-- <img src="<?php //echo base_url('style_admin/images/logo.png'); ?>" alt="" height="60" width="200"/> -->Paradise</a>
                <a href="index.html" class="sSidebar_show"><img src="assets/img/logo_main_small.png" alt="" height="32" width="32"/></a>
            </div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>
        
        <div class="menu_section">
            <ul>
                <li class="current_section" title="Dashboard">
                    <a href="<?php echo site_url('Admin'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('Slider'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                        <span class="menu_title">Slider</span>
                    </a>
                <li title="Teachers">
                    <a href="<?php echo site_url('Menu'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                        <span class="menu_title">Create Menu</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Category'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE1BD;</i></span>
                        <span class="menu_title">Category</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Brands'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                        <span class="menu_title">Brands</span>
                    </a>
                <li>
                    <a href="<?php echo site_url('Admin_products'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87B;</i></span>
                        <span class="menu_title">Products</span>
                    </a>
                </li>
                <li title="Students">
                    <a href="<?php echo site_url('Top_brands'); ?>">
                        <span class="menu_icon"><i class="material-icons">group_work</i></span>
                        <span class="menu_title">Top Brands</span>
                    </a>
                </li>
                <li  title="Classes">
                    <a href="<?php echo site_url('Promotions'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                        <span class="menu_title">Promotions</span>
                    </a>
                </li>
                <li title="Students">
                    <a href="<?php echo site_url('Admin_contact'); ?>">
                        <span class="menu_icon"><i class="material-icons">group_work</i></span>
                        <span class="menu_title">Contact</span>
                    </a>
                </li>
             <!--    <li title="Snippets">
                    <a href="<?php //echo site_url('Gallery'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE86F;</i></span>
                        <span class="menu_title">Gallery</span>
                    </a>
                </li> -->
<!--                 <li>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                        <span class="menu_title">About</span>
                    </a>
                    <ul>
                        <li><a href="<?php //echo site_url('About'); ?>">About WSO</a></li>
                        <li><a href="<?php //echo site_url('About/founder'); ?>">Founder</a></li>
                        <li><a href="<?php //echo site_url('About/Presdient_message'); ?>">Presendent Message</a></li>
                    </ul>
                </li>
                <li title="Students">
                    <a href="<?php //echo site_url('Staffs'); ?>">
                        <span class="menu_icon"><i class="material-icons">group_work</i></span>
                        <span class="menu_title">Staff</span>
                    </a>
                </li>
                <li  title="Classes">
                    <a href="<?php //echo site_url('Our_projects'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                        <span class="menu_title">Our Projects</span>
                    </a>
                </li> -->
                
                
                <li title="Logout">
                    <a href="<?php echo site_url('Login/logout'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Logout</span>
                    </a>
                </li>
                <!-- <li title="Snippets">
                    <a href="page_snippets.html">
                        <span class="menu_icon"><i class="material-icons">&#xE86F;</i></span>
                        <span class="menu_title">Snippets</span>
                    </a>
                </li>
                <li title="User Profile">
                    <a href="page_user_profile.html">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">User Profile</span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                        <span class="menu_title">Layout</span>
                    </a>
                    <ul>
                        <li><a href="layout_top_menu.html">Top Menu</a></li>
                        <li><a href="layout_header_full.html">Full Header</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE1BD;</i></span>
                        <span class="menu_title">Kendo UI Widgets</span>
                    </a>
                    <ul>
                        <li><a href="kendoui_autocomplete.html">Autocomplete</a></li>
                        <li><a href="kendoui_calendar.html">Calendar</a></li>
                        <li><a href="kendoui_colorpicker.html">ColorPicker</a></li>
                        <li><a href="kendoui_combobox.html">ComboBox</a></li>
                        <li><a href="kendoui_datepicker.html">DatePicker</a></li>
                        <li><a href="kendoui_datetimepicker.html">DateTimePicker</a></li>
                        <li><a href="kendoui_dropdown_list.html">DropDownList</a></li>
                        <li><a href="kendoui_masked_input.html">Masked Input</a></li>
                        <li><a href="kendoui_menu.html">Menu</a></li>
                        <li><a href="kendoui_multiselect.html">MultiSelect</a></li>
                        <li><a href="kendoui_numeric_textbox.html">Numeric TextBox</a></li>
                        <li><a href="kendoui_panelbar.html">PanelBar</a></li>
                        <li><a href="kendoui_timepicker.html">TimePicker</a></li>
                        <li><a href="kendoui_toolbar.html">Toolbar</a></li>
                        <li><a href="kendoui_window.html">Window</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE87B;</i></span>
                        <span class="menu_title">Components</span>
                    </a>
                    <ul>
                        <li><a href="components_accordion.html">Accordions</a></li>
                        <li><a href="components_buttons.html">Buttons</a></li>
                        <li><a href="components_fab.html">Buttons: FAB</a></li>
                        <li><a href="components_cards.html">Cards</a></li>
                        <li><a href="components_colors.html">Colors</a></li>
                        <li><a href="components_common.html">Common</a></li>
                        <li><a href="components_dropdowns.html">Dropdowns</a></li>
                        <li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>
                        <li><a href="components_grid.html">Grid</a></li>
                        <li><a href="components_icons.html">Icons</a></li>
                        <li><a href="components_modal.html">Lightbox/Modal</a></li>
                        <li><a href="components_lists.html">Lists</a></li>
                        <li><a href="components_nestable.html">Nestable</a></li>
                        <li><a href="components_notifications.html">Notifications</a></li>
                        <li><a href="components_panels.html">Panels</a></li>
                        <li><a href="components_preloaders.html">Preloaders</a></li>
                        <li><a href="components_sortable.html">Sortable</a></li>
                        <li><a href="components_tables.html">Tables</a></li>
                        <li><a href="components_tables_examples.html">Tables Examples</a></li>
                        <li><a href="components_tabs.html">Tabs</a></li>
                        <li><a href="components_tooltips.html">Tooltips</a></li>
                        <li><a href="components_typography.html">Typography</a></li>
                    </ul>
                </li>
                <li >
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8CB;</i></span>
                        <span class="menu_title">E-commerce</span>
                    </a>
                    <ul>
                        <li><a href="ecommerce_product_details.html">Product Details</a></li>
                        <li><a href="ecommerce_product_edit.html">Product Edit</a></li>
                        <li><a href="ecommerce_products_grid.html">Products Grid</a></li>
                        <li><a href="ecommerce_products_list.html">Products List</a></li>
                    </ul>
                </li>
                <li >
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span>
                        <span class="menu_title">Plugins</span>
                    </a>
                    <ul>
                        <li><a href="plugins_calendar.html">Calendar</a></li>
                        <li><a href="plugins_charts.html">Charts</a></li>
                        <li><a href="plugins_code_editor.html">Code Editor</a></li>
                        <li><a href="plugins_crud_table.html">CRUD Table</a></li>
                        <li><a href="plugins_datatables.html">Datatables</a></li>
                        <li><a href="plugins_diff.html">Diff View</a></li>
                        <li><a href="plugins_gantt_chart.html">Gantt Chart</a></li>
                        <li><a href="plugins_google_maps.html">Google Maps</a></li>
                        <li><a href="plugins_tablesorter.html">Tablesorter</a></li>
                        <li><a href="plugins_vector_maps.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li >
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE24D;</i></span>
                        <span class="menu_title">Pages</span>
                    </a>
                    <ul>
                        <li><a href="page_blank.html">Blank</a></li>
                        <li><a href="page_contact_list.html">Contact List</a></li>
                        <li><a href="page_gallery.html">Gallery</a></li>
                        <li><a href="page_help.html">Help/Faq</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li><a href="page_notes.html">Notes</a></li>
                        <li><a href="page_pricing_tables.html">Pricing Tables</a></li>
                        <li><a href="page_settings.html">Settings</a></li>
                        <li><a href="page_todo.html">Todo</a></li>
                        <li><a href="page_user_edit.html">User edit</a></li>
                        <li class="menu_subtitle">Issue Tracker</li>
                        <li><a href="page_issues_list.html">List View</a></li>
                        <li><a href="page_issue_details.html">Issue Details</a></li>

                        <li class="menu_subtitle">Blog</li>
                        <li><a href="page_blog_list.html">Blog List</a></li>
                        <li><a href="page_blog_article.html">Blog Article</a></li>
                        <li class="menu_subtitle">Errors</li>
                        <li><a href="error_404.html">Error 404</a></li>
                        <li><a href="error_500.html">Error 500</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </aside><!-- main sidebar end -->