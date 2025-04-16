<main>
    <!-- =======================
  Main contain START -->
    <section class="py-4">
        <div class="container">
            <h1 class="mb-4 h3">ویرایش دسته بندی </h1>
            <div class="row pb-4 bg-light p-3 mb-4 rounded">
                <form action="{{route('category.update', $category->id)}}" method="post">
                    @csrf
                    @method('PUT')
                 <div class="row">
                     <div class="col-sm-12 col-md-4">
                         <label class="form-label">نام  </label>
                         <input name="name" type="text" class="form-control" placeholder="نام دست بندی ..." value="{{$category->name}}">
                         @error('name')
                         <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                         @enderror
                     </div>
                     <div class="col-sm-12 col-md-4">
                         <label class="form-label">نامک</label>
                         <input name="slug" type="text" class="form-control" placeholder="  نامک ..." value="{{$category->slug}}">
                         @error('slug')
                         <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                         @enderror
                     </div>
                     <div class="col-sm-12 col-md-4 ">
                         <label class="form-label">توضیحات</label>
                         <textarea class="form-control" name="description" >{{$category->description}}</textarea>
                     </div>
                     <div class="col-sm-12 col-md-4 mt-3">
                         <label class="form-label">آیکون</label>
                         <select class="form-control" name="icon" >
                             <option value="⚽️" {{$category->icon === '⚽️' ? 'selected': ''}}>⚽️ اخبار ورزشی</option>
                             <option value="🏀" {{$category->icon === '🏀' ? 'selected': ''}}> 🏀</option>
                             <option value="🏈" {{$category->icon === '🏈' ? 'selected': ''}}>🏈 </option>
                             <option value="🎾" {{$category->icon === '🎾' ? 'selected': ''}}>🎾 </option>
                             <option value="🏛️" {{$category->icon === '🏛️' ? 'selected': ''}}>🏛️ اخبار سیاسی</option>
                             <option value="🗳️" {{$category->icon === '🗳️' ? 'selected': ''}}>🗳️ </option>
                             <option value="🌍" {{$category->icon === '🌍' ? 'selected': ''}}>🌍 </option>
                             <option value="📊" {{$category->icon === '📊' ? 'selected': ''}}>📊 </option>
                             <option value="📈" {{$category->icon === '📈' ? 'selected': ''}}>📈 اخبار اقتصادی </option>
                             <option value="💰" {{$category->icon === '💰' ? 'selected': ''}}>💰</option>
                             <option value="📉" {{$category->icon === '📉' ? 'selected': ''}}>📉</option>
                             <option value="🏦" {{$category->icon === '🏦' ? 'selected': ''}}>🏦</option>
                             <option value="💵" {{$category->icon === '💵' ? 'selected': ''}}>💵</option>
                             <option value="🎨" {{$category->icon === '🎨' ? 'selected': ''}}>🎨 اخبار هنری </option>
                             <option value="🖼️" {{$category->icon === '🖼️' ? 'selected': ''}}>🖼️</option>
                             <option value="🖌️" {{$category->icon === '🖌️' ? 'selected': ''}}>🖌️</option>
                             <option value="🎭" {{$category->icon === '🎭' ? 'selected': ''}}>🎭</option>
                             <option value="🎬" {{$category->icon === '🎬' ? 'selected': ''}}>🎬</option>
                             <option value="🎭" {{$category->icon === '🎭' ? 'selected': ''}}>🎭 اخبار فرهنگی</option>
                             <option value="🎨" {{$category->icon === '🎨' ? 'selected': ''}}>🎨</option>
                             <option value="📚" {{$category->icon === '📚' ? 'selected': ''}}>📚</option>
                             <option value="🎶" {{$category->icon === '🎶' ? 'selected': ''}}>🎶</option>
                             <option value="🕌" {{$category->icon === '🕌' ? 'selected': ''}}>🕌</option>
                             <option value="✈️" {{$category->icon === '✈️' ? 'selected': ''}}>✈️ اخبار گردشگری</option>
                             <option value="🌍" {{$category->icon === '🌍' ? 'selected': ''}}>🌍 </option>
                             <option value="🏖️" {{$category->icon === '🏖️' ? 'selected': ''}}>🏖️ </option>
                             <option value="🗺️" {{$category->icon === '🗺️' ? 'selected': ''}}>🗺️ </option>
                             <option value="🏕️" {{$category->icon === '🏕️' ? 'selected': ''}}>🏕️ </option>
                             <option value="💻" {{$category->icon === '💻' ? 'selected': ''}}>💻 اخبار فناوری و تکنولوژی</option>
                             <option value="📱" {{$category->icon === '📱' ? 'selected': ''}}>📱 </option>
                             <option value="🔧" {{$category->icon === '🔧' ? 'selected': ''}}>🔧 </option>
                             <option value="🖥️" {{$category->icon === '🖥️' ? 'selected': ''}}>🖥️ </option>
                             <option value="🚀" {{$category->icon === '🚀' ? 'selected': ''}}>🚀 </option>
                         </select>
                         @error('icon')
                         <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                         @enderror
                     </div>
                     <div class="col-sm-12 col-md-2 d-flex align-items-center mt-5">
                         <input class="btn btn-success w-100 m-0" type="submit" value="ثبت">
                     </div>
                 </div>
                </form>
            </div>
        </div>
    </section>
    <!-- =======================
    Main contain END -->
</main>
