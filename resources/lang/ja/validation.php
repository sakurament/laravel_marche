<?php

return [

     /*
     |------------------------------------------------- -------------------------
     | 検証言語の行
     |------------------------------------------------- -------------------------
     |
     | 次の言語行には、次の言語で使用されるデフォルトのエラー メッセージが含まれています。
     | バリデータクラス。 これらのルールの中には、複数のバージョンがあるものもあります。
     | サイズのルールとして。 ここで各メッセージを自由に調整してください。
     |
     */

     'accepted' => ':attribute は受け入れられる必要があります。',
     'accepted_if' => ':other が :value の場合、:attribute は受け入れられる必要があります。',
     'active_url' => ':attribute は有効な URL ではありません。',
     'after' => ':attribute は :date 以降の日付である必要があります。',
     'after_or_equal' => ':attribute は :date 以降の日付である必要があります。',
     'alpha' => ':attribute には文字のみを含める必要があります。',
     'alpha_dash' => ':attribute には文字、数字、ダッシュ、アンダースコアのみを含める必要があります。',
     'alpha_num' => ':attribute には文字と数字のみを含める必要があります。',
     'array' => ':attribute は配列である必要があります。',
     'before' => ':attribute は :date より前の日付である必要があります。',
     'before_or_equal' => ':attribute は :date 以前の日付である必要があります。',
     'between' => [
         'numeric' => ':attribute は :min と :max の間でなければなりません。',
         'file' => ':attribute は :min から :max キロバイトまででなければなりません。',
         'string' => ':attribute は :min 文字と :max 文字の間である必要があります。',
         'array' => ':attribute には :min と :max の間の項目が必要です。',
     ],
     'boolean' => ':attribute フィールドは true または false である必要があります。',
     'confirmed' => ':attribute 確認が一致しません。',
     'current_password' => 'パスワードが間違っています。',
     'date' => ':attribute は有効な日付ではありません。',
     'date_equals' => ':attribute は :date と等しい日付である必要があります。',
     'date_format' => ':attribute が形式 :format と一致しません。',
     'declined' => ':attribute は拒否される必要があります。',
     'declined_if' => ':other が :value の場合、:attribute は拒否される必要があります。',
     'different' => ':attribute と :other は異なっていなければなりません。',
     'digits' => ':属性は :digits 数字である必要があります。',
     'digits_between' => ':attribute は :min 桁と :max 桁の間である必要があります。',
     'dimensions' => ':attribute の画像の寸法が無効です。',
     'distinct' => ':attribute フィールドには重複した値があります。',
     'email' => ':attribute は有効な電子メール アドレスである必要があります。',
     'ends_with' => ':attribute は次のいずれかで終わる必要があります: :values。',
     'enum' => '選択された:属性は無効です。',
     'exists' => '選択された:属性は無効です。',
     'file' => ':attribute はファイルである必要があります。',
     'filled' => ':attribute フィールドには値が必要です。',
     'gt' => [
         'numeric' => ':attribute は :value より大きくなければなりません。',
         'file' => ':attribute は :value キロバイトより大きくなければなりません。',
         'string' => ':attribute は :value 文字より大きくなければなりません。',
         'array' => ':attribute には :value より多くの項目が必要です。',
     ],
     'gte' => [
      'numeric' => ':attribute は :value 以上である必要があります。',
      'file' => ':attribute は :value キロバイト以上である必要があります。',
      'string' => ':attribute は :value 文字以上である必要があります。',
      'array' => ':attribute には :value 項目以上が必要です。',
     ],
  'image' => ':attribute は画像である必要があります。',
  'in' => '選択された:属性は無効です。',
  'in_array' => ':attribute フィールドは :other に存在しません。',
  'integer' => ':attribute は整数である必要があります。',
  'ip' => ':attribute は有効な IP アドレスである必要があります。',
  'ipv4' => ':attribute は有効な IPv4 アドレスである必要があります。',
  'ipv6' => ':attribute は有効な IPv6 アドレスである必要があります。',
  'json' => ':attribute は有効な JSON 文字列である必要があります。',
  'lt' => [
      'numeric' => ':attribute は :value より小さくなければなりません。',
      'file' => ':attribute は :value キロバイト未満である必要があります。',
      'string' => ':attribute は :value 文字より小さくなければなりません。',
      'array' => ':attribute には :value 未満の項目が必要です。',
  ],
  'lte' => [
      'numeric' => ':attribute は :value 以下である必要があります。',
      'file' => ':attribute は :value キロバイト以下である必要があります。',
      'string' => ':attribute は :value 文字以下である必要があります。',
      'array' => ':attribute には :value を超える項目を含めることはできません。',
  ],
  'mac_address' => ':attribute は有効な MAC アドレスである必要があります。',
  'max' => [
      'numeric' => ':attribute は :max を超えてはなりません。',
      'file' => ':attribute は :max キロバイトを超えてはなりません。',
      'string' => ':attribute は :max 文字を超えてはなりません。',
      'array' => ':attribute には :max を超える項目を含めることはできません。',
  ],
  'mimes' => ':attribute はタイプ: :values のファイルである必要があります。',
     'mimetypes' => ':attribute はタイプ: :values のファイルである必要があります。',
     'min' => [
         'numeric' => ':attribute は少なくとも :min である必要があります。',
         'file' => ':attribute は少なくとも :min キロバイトでなければなりません。',
         'string' => ':attribute は少なくとも :min 文字である必要があります。',
         'array' => ':attribute には少なくとも :min 個の項目が必要です。',
     ],
     'multiple_of' => ':attribute は :value の倍数である必要があります。',
     'not_in' => '選択された:属性は無効です。',
     'not_regex' => ':attribute 形式が無効です。',
     'numeric' => ':attribute は数値である必要があります。',
     'password' => 'パスワードが間違っています。',
     'present' => ':attribute フィールドが存在する必要があります。',
     'prohibited' => ':attribute フィールドは禁止されています。',
     'prohibited_if' => ':other が :value の場合、:attribute フィールドは禁止されます。',
     'prohibited_unless' => ':values に :other がない限り、:attribute フィールドは禁止されます。',
     'prohibits' => ':attribute フィールドは、:other の存在を禁止します。',
     'regex' => ':attribute 形式が無効です。',
     'required' => ':attribute フィールドは必須です。',
     'required_array_keys' => ':attribute フィールドには、:values のエントリが含まれている必要があります。',
     'required_if' => ':other が :value の場合、:attribute フィールドは必須です。',
     'required_unless' => ':values に :other がない限り、:attribute フィールドは必須です。',
     'required_with' => ':values が存在する場合、:attribute フィールドは必須です。',
     'required_with_all' => ':values が存在する場合、:attribute フィールドは必須です。',
     'required_without' => ':values が存在しない場合、:attribute フィールドは必須です。',
     'required_without_all' => ':values が存在しない場合、:attribute フィールドは必須です。',
     'same' => ':attribute と :other は一致する必要があります。',
     'size' => [
         'numeric' => ':attribute は :size である必要があります。',
         'file' => ':attribute は :size キロバイトである必要があります。',
         'string' => ':attribute は :size 文字である必要があります。',
         'array' => ':attribute には :size 項目が含まれている必要があります。',
     ],
     'starts_with' => ':attribute は次のいずれかで始まらなければなりません: :values。',
     'string' => ':attribute は文字列である必要があります。',
     'timezone' => ':attribute は有効なタイムゾーンである必要があります。',
     'unique' => ':attribute はすでに取得されています。',
     'uploaded' => ':attribute のアップロードに失敗しました。',
     'url' => ':attribute は有効な URL である必要があります。',
     'uuid' => ':attribute は有効な UUID である必要があります。',

     /*
     |------------------------------------------------- -------------------------
     | カスタム検証言語行
     |------------------------------------------------- -------------------------
     |
     | ここで、属性のカスタム検証メッセージを指定できます。
     | 行の名前には規則「attribute.rule」を使用します。 これにより、
     | 特定の属性ルールに特定のカスタム言語行を指定します。
     |
     */
    'custom' => [
      '属性名' => [
          'ルール名' => 'カスタムメッセージ',
      ],
    ],

  /*
  |------------------------------------------------- -------------------------
  | カスタム検証属性
  |------------------------------------------------- -------------------------
  |
  | 次の言語行は、属性のプレースホルダーを交換するために使用されます。
  | 代わりに「電子メールアドレス」など、より読みやすいものを使用してください
  | 「メール」の。 これは単にメッセージをより表現力豊かにするのに役立ちます。
  |
  */

  'attributes' => [
      'name' => '名前',
      'email' => 'メールアドレス',
      'password' => 'パスワード'
  ],

];