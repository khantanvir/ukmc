@extends('adminpanel')
@section('admin')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="secondary-nav">
            <div class="breadcrumbs-container" data-page-heading="Analytics">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </a>
                    <div class="d-flex breadcrumb-content">
                        <div class="page-header">
                            <div class="page-title">
                            </div>
                            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="row layout-top-spacing">
            <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col col-md-12">
                                <div id="tableSimple" class="col-lg-12 col-12 p-0">
                                    <div class="table-responsive">
                                        <table id="manage_app_process" class="table-bordered mb-4 table">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Course Name</th>
                                                    <th>Institute Name</th>
                                                    <th>Category</th>
                                                    <th>Course Level</th>
                                                    <th>Duration</th>
                                                    <th>Intake</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="">
                                                    <td>1</td>
                                                    <td>Bachelor of Architectural Studies</td>
                                                    <td>Unitec Institute of Technology</td>
                                                    <td>Architecture</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>February</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/78327ed4e27e476383aecf91fda7d0f1" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>2</td>
                                                    <td>Bachelor of Applied Technology - Transport Management</td>
                                                    <td>Unitec Institute of Technology</td>
                                                    <td>Business Administration and Management</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>July, February</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/a2a0d78525244de2908350949fca365a" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>3</td>
                                                    <td>Bachelor of Applied Technology - Automotive Engineering</td>
                                                    <td>Unitec Institute of Technology</td>
                                                    <td>Engineering</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>July, February</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/4324a25b950d405a89166415266e006f" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>4</td>
                                                    <td>Bachelor of Applied Science (Biodiversity Management)</td>
                                                    <td>Unitec Institute of Technology</td>
                                                    <td>Science</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>July, February</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/9fb27ccaae1449029ec67e4373f966f4" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>5</td>
                                                    <td>Bachelor of Applied Science (Animal Management and Welfare, and Biodiversity Management)</td>
                                                    <td>Unitec Institute of Technology</td>
                                                    <td>Science</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>July, February</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/5a58682dc1d04583b1ff3583ddd24383" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>6</td>
                                                    <td>Bachelor of Applied Science (Animal Management and Welfare)</td>
                                                    <td>Unitec Institute of Technology</td>
                                                    <td>Science</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>July, February</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/2882fa4a7a574be78ddbd051b6c3d8c3" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>7</td>
                                                    <td>Bachelor of Accounting</td>
                                                    <td>Unitec Institute of Technology</td>
                                                    <td>Accounting, Finance and Economics</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>July, February</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/17582e432ae14c3bb841700814e348bf" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>8</td>
                                                    <td>BA (Hons) Education</td>
                                                    <td>The College, Swansea University ( Navitas )</td>
                                                    <td>Education</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>September</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/699ae6bb9da2460db3e0e46d3138444a" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>9</td>
                                                    <td>BSc (Hons) Economics</td>
                                                    <td>The College, Swansea University ( Navitas )</td>
                                                    <td>Accounting, Finance and Economics</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 3 years</td>
                                                    <td>September</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/49da8f2a5e9843f8bbc70aa47c871f03" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>10</td>
                                                    <td>MSci Computer Science</td>
                                                    <td>The College, Swansea University ( Navitas )</td>
                                                    <td>Computer Science</td>
                                                    <td>Undergraduate</td>
                                                    <td>Full-Time, 4 years</td>
                                                    <td>September</td>
                                                    <td> <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                        <div class="input-checkbox">
                                            <span class="switch-chk-label label-left">On</span>
                                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked="">
                                            <span class="switch-chk-label label-right">Off</span>
                                        </div>
                                    </div></td>

                                                    <td class="flex space-x-2"><a href="/course/236182b4753247779334b71d216fe305" class=""><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon custom-edit-icon"><path  d="M12 20h9"></path><path  d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                        <span style="cursor: pointer;"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye" data-v-139ba731=""><path  d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" data-v-139ba731=""></path><circle  cx="12" cy="12" r="3" data-v-139ba731=""></circle></svg></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@stop
