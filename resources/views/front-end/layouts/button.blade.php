@if (isset(Auth::user()->level)&&Auth::user()->level>0)
 <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      @if (Route::current()->getName()=='homepage')
            <li><a href="{{ route('order.index') }}" class="btn-floating red tooltipped"data-position="top" data-tooltip="Quản lý đơn hàng"><i class="material-icons">shopping_cart</i></a></li>
            <li><a href="{{ route('book.index') }}" class="btn-floating green tooltipped" data-position="top" data-tooltip="Quản lý Sách"><i class="material-icons">library_books</i></li>
            <li><a href="{{ route('slide.index') }}" class="btn-floating yellow tooltipped" data-position="top" data-tooltip="Quản lý Slide"><i class="material-icons">burst_mode</i></a></li>
            <li><a href="{{ route('slide.index') }}" class="btn-floating yellow tooltipped" data-position="top" data-tooltip="Quản lý Tác Giả"><i class="material-icons">supervisor_account</i></a></li>

      @endif
      @if (Route::current()->getName()=='viewBook' )
            <li><a href="{{ route('book.edit',$book->bookId) }}" class="btn-floating blue tooltipped" data-position="top" data-tooltip="Sửa sách: {{$book->book_name}} "><i class="material-icons">library_books</i></a></li>
            <li><a href="{{ route('author.edit',$book->authorId) }}" class="btn-floating yellow tooltipped" data-position="top" data-tooltip="Sửa tác giả: {{$book->author_name}}"><i class="material-icons">person_pin</i></a></li>
            <li><a href="{{ route('company.edit',$book->companyId) }}" class="btn-floating yellow tooltipped" data-position="top" data-tooltip="Sửa Công ty phát hành: {{$book->company_name}}"><i class="material-icons">work</i></a></li>
      @endif
      @if (Route::current()->getName()=='viewCategory' )
            <li><a href="{{ route('category.edit',$categorySelect->id) }}" class="btn-floating blue tooltipped" data-position="top" data-tooltip="Sửa danh mục: {{$categorySelect->category_name}}"><i class="material-icons">collections_bookmark</i></a></li>
      @endif
      @if (in_array(Route::current()->getName(),array('viewHotBookWeek','viewHotBookMonth','viewBookNewPublish')) )
            <li><a href="{{ route('book.index') }}" class="btn-floating blue tooltipped" data-position="top" data-tooltip="Quản lý sách"><i class="material-icons">library_books</i></a></li>
      @endif
      @if (Route::current()->getName()=='viewAuthor' && isset($authorInfo->id) )
            <li><a href="{{ route('author.edit',$authorInfo->id) }}" class="btn-floating blue tooltipped" data-position="top" data-tooltip='Sửa tác giả: {{$authorInfo->author_name}} ' ><i class="material-icons">perm_identity</i></a></li>
      @endif
      @if (Route::current()->getName()=='viewCompany' && isset($companyInfo->id))
            <li><a href="{{ route('company.edit',$companyInfo->id) }}" class="btn-floating blue tooltipped" data-position="top" data-tooltip="Sửa Công ty phát hành: {{$companyInfo->company_name}}"><i class="material-icons">work</i></a></li>
      @endif
          <li><a href="{{ route('dashboard') }}" class="btn-floating blue tooltipped" data-position="top" data-tooltip="Vào trang quản trị"><i class="material-icons">dashboard</i></a></li>
    </ul>
  </div>
@endif