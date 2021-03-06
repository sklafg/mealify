<div class="row" style="margin-top: 25px">
    <div class="col-lg-9">
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, [ 'class' => 'form-control' ]) !!}
        </div>
        <div class="form-group">
            <category-selector
                @if(isset($categoriesUrl)) api="{{$categoriesUrl}}" @endif>
            </category-selector>
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Image URL') !!}
            {!! Form::text('image', null, [ 'class' => 'form-control' ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Directions') !!}
            {!! Form::textarea('description', null, [ 'class' => 'form-control' ]) !!}
        </div>
    </div>
    <div class="col-lg-3">
        <h3>Ingredients</h3>
        <ul class="list-unstyled">
            <ingredient-selector
                @if(isset($ingredientUrl)) api="{{ $ingredientUrl }}" @endif>
            </ingredient-selector>
        </ul>
    </div>
</div>
<hr>