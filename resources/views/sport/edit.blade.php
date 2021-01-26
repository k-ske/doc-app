<h1>スポーツ活動歴</h1>

<form action="{{ route('sport.update' ,$sport->id) }} " method="POST">
  @csrf
  @method('PUT')

  <h3>各年代において取り組んだスポーツ</h3>
  <p>小学生：<input type="text" name="es_sport" value="{{ old('es_sport', $sport->es_sport) }}"></p>
  <p>詳細記入欄：<textarea name="es_comment" value="{{ old('es_comment', $sport->es_comment) }}"></textarea></p>
  <p>中学生：<input type="text" name="jhs_sport" value="{{ old('jhs_sport', $sport->jhs_sport) }}"></p>
  <p>詳細記入欄：<textarea name="jhs_comment" value="{{ old('jhs_comment', $sport->jhs_comment) }}"></textarea></p>
  <p>高校生：<input type="text" name="hs_sport" value="{{ old('hs_sport', $sport->hs_sport) }}"></p>
  <p>詳細記入欄：<textarea name="hs_comment" value="{{ old('hs_comment', $sport->hs_comment) }}"></textarea></p>
  <p>大学生：<input type="text" name="co_sport" value="{{ old('co_sport', $sport->co_sport) }}"></p>
  <p>詳細記入欄：<textarea name="co_comment" value="{{ old('co_comment', $sport->co_comment) }}"></textarea></p>
  <input type="submit" value="編集する">
</form>
