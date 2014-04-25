@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.contact_us') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<h3>{{{ Lang::get('site.contact_us') }}}</h3>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
				{{ Form::open() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter e-mail" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="General Customer Service">General Customer Service</option>
                                <option value="Suggestions">Suggestions</option>
                                <option value="Product Support">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="body" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
				{{ Form::close(); }}
            </div>
        </div>
        <div class="col-md-4">
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                {{ Setting::get('site.contact_address') }}
            </address>
            <address>
                <a href="mailto:#">{{{ Setting::get('site.contact_email') }}}</a>
            </address>
        </div>
    </div>
</div>

@stop
