@extends('cms.master')

@section('content')
<div class="row">
    <div class="col-md-2">
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Administrator</li>
                    <li><a href=""><i class="fa fa-gears"></i> <span>Frontend CMS</span></a></li>
                    <li><a href=""><i class="fa fa-gear"></i> <span>Forum CMS</span></a></li>
                    <li class="active"><a href="{{ route('setting.show')}}"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>
                </ul>
            </section>
        </aside>
    </div>
    <div class="col-md-10 content-extend">
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                Settings
              </h1>
            </section>
            <section class="content">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Header and Footer Background Color</label>
                                <input type="text" class="form-control my-colorpicker2" value="#36c86b">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Menu Color</label>
                                <input type="text" class="form-control menu-color" value="#36c86b">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Button Background</label>
                                <input type="text" class="form-control button-color" value="#36c86b">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Facebook Url</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Twitter Url</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Instagram Url</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Youtube Url</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Copyright Text</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-offset-3 col-md-6">
                            <button type="submit" class="btn btn-block btn-danger btn-lg">Save</button>
                        </div>
                     </div>
                </form>
            </section>
        </div>
    </div>
</div>

@stop
