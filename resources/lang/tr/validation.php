<?php

return [
    'accepted'         => ':attribute kabul edilmeli.',
    'active_url'       => ':attribute geçerli bir URL değil.',
    'after'            => ':attribute :date\'den sonraki bir tarih olmalı.',
    'after_or_equal'   => ':attribute bugün veya daha sonraki bir tarih olmalı.',
    'alpha'            => ':attribute sadece harf içerebilir.',
    'alpha_dash'       => ':attribute sadece harf, sayı ve kesik çizgiler içerebilir.',
    'alpha_num'        => ':attribute sadece harf ve sayı içerebilir.',
    'latin'            => ':attribute sadece ISO temel Latin alfabesinde geçerli olan harfleri içerebilir.',
    'latin_dash_space' => ':attribute sadece ISO temel Latin alfabesinde geçerli olan harfleri, rakamları ve işaretleri  içerebilir.',
    'array'            => ':attribute dizi olmalı.',
    'before'           => ':attribute :date\'den önceki bir tarih olmalı.',
    'before_or_equal'  => ':attribute bugün veya daha önceki bir tarih olmalı.',
    'between'          => [
        'numeric' => ':attribute :min ve :max aralığında olmalı.',
        'file'    => ':attribute :min ve :max kilobyte aralığında olmalı.',
        'string'  => ':attribute :min ve :max karakter aralığında olmalı.',
        'array'   => ':attribute :min ve :max madde aralığında olmalı.',
    ],
    'boolean'          => ':attribute doğru yada yanlış olmalı.',
    'confirmed'        => ':attribute doğrulama eşleşmiyor.',
    'current_password' => ':attribute doğru değil.',
    'date'             => ':attribute geçerli bir tarih olmalı.',
    'date_equals'      => ':attribute :date ile eşit bir tarih olmalı',
    'date_format'      => ':attribute :format formatıyle uyuşmuyor.',
    'different'        => ':attribute ve :other farklı olmalı.',
    'digits'           => ':attribute :digits basamağında olmalı.',
    'digits_between'   => ':attribute basamakları :min ve :max aralığında olmalı.',
    'dimensions'       => ':attribute geçersiz ölçülerde.',
    'distinct'         => ':attribute daha önce kullanıldı.',
    'email'            => ':attribute geçerli e-posta adresi olmalı.',
    'ends_with'        => ':attribute şunlardan biriyle bitmelidir: :values',
    'exists'           => 'Seçilen :attribute geçersiz.',
    'file'             => ':attribute dosya olmalı.',
    'filled'           => ':attribute alanı gerekmekte.',
    'gt'               => [
        'numeric' => ':attribute :value \'dan büyük olmalıdır',
        'file'    => ':attribute boyutu :value kilobyte \'dan fazla olmalı',
        'string'  => ':attribute :value \'dan fazla karakter içermelidir',
        'array'   => ':attribute :value \'dan fazla öğe olmalı.',
    ],
    'gte' => [
        'numeric' => ':attribute :value \'dan büyük veya eşit olmalıdır',
        'file'    => ':attribute :value kilobyte büyük veya eşit olmalıdır',
        'string'  => ':attribute :value \'dan fazla veya karaktere sahip olmalıdır',
        'array'   => ':attribute :value dan fazla öğeye sahip olmalıdır',
    ],
    'image'    => ':attribute fotoğraf olmalı.',
    'in'       => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute :other\'da bulunmuyor.',
    'integer'  => ':attribute tam sayı olmalı.',
    'ip'       => ':attribute geçerli bir IP adresi olmalı.',
    'ipv4'     => ':attribute geçerli bir IPv4 adresi olmalı',
    'ipv6'     => ':attribute geçerli bir IPv6 adresi olmalı',
    'json'     => ':attribute geçerli bir JSON olmalı.',
    'lt'       => [
        'numeric' => ':attribute :value \'den az olmalı',
        'file'    => ':attribute şundan küçük olmalıdır: value kilobayt.',
        'string'  => ':attribute  :value az karaktere sahip olmalı',
        'array'   => ':attribute :value değerinden daha az olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':attribute :value \'dan küçük veya eşit olmalıdır',
        'file'    => ':attribute :value kilobyte küçük veya eşit olmalıdır',
        'string'  => ':attribute :value \'dan küçük veya eşit olmalıdır',
        'array'   => ':attribute :value \' dan fazla öğe olmamalı',
    ],
    'max' => [
        'numeric' => ':attribute :max sayısından büyük olmalı.',
        'file'    => ':attribute :max kilobayttan büyük olmamalı',
        'string'  => ':attribute :max sayısından büyük olmamalı',
        'array'   => ':attribute :max parçadan büyük olmamalı',
    ],
    'mimes'     => ':attribute :values türünde bir dosya olmalı',
    'mimetypes' => ':attribute :values türünde bir dosya olmalı',
    'min'       => [
        'numeric' => ':attribute en az :min olmalı',
        'file'    => ':attribute en az :min kiobayt olmalı',
        'string'  => ':attribute en az :min karakter olmalı',
        'array'   => ':attribute en az :min parça olmalı',
    ],
    'not_in'               => 'Seçilen :attribute geçersiz',
    'not_regex'            => ': attribute format geçersiz',
    'numeric'              => ':atttribute numara olmalı',
    'password'             => 'Şifre yanlış',
    'present'              => ':attribute alanı şimdiki zamanda olmalı',
    'regex'                => ':attribute geçersiz formatta',
    'required'             => ':attribute gerekli',
    'required_if'          => ':attribute :other :values olduğunda gereklidir',
    'required_unless'      => ':attribute :other :values içinde olduğunda gereklidir',
    'required_with'        => ':attribute :other :values şimdiki zaman olduğunda gereklidir',
    'required_with_all'    => ':attribute :values şimdiki zaman olduğunda gereklidir',
    'required_without'     => ':attribute :values şimdiki zaman olmadığında gereklidir',
    'required_without_all' => ':attribute hiçbir :values şimdiki zaman olmadığında gereklidir',
    'same'                 => ':attribute ve :other eşleşmelidir',
    'size'                 => [
        'numeric' => ':attribute :size olmalı.',
        'file'    => ':attribute :size kilobayt olmalı',
        'string'  => ':attribute :size karakter olmalı.',
        'array'   => ':attribute :size parçayı içermeli',
    ],
    'starts_with' => ':attribute şunlardan biriyle başlamalıdır: :values.',
    'string'      => ':attribute karakterlerden oluşmalı',
    'timezone'    => ':attribute gerçeli bölgede olmadı',
    'unique'      => ':attribute halihazırda alındı.',
    'uploaded'    => ':attribute yüklenemedi.',
    'url'         => ':attribute biçimi geçersiz.',
    'uuid'        => ':attribute geçerli bir UUID olmalıdır.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute ayrılmış kelime içeriyor',
    'dont_allow_first_letter_number' => ':input alanının ilk karakteri rakam olamaz',
    'exceeds_maximum_number'         => ':attribute maksimum uzunluğu geçti',
    'db_column'                      => ':attribute sadece basit ISO karakterleinden oluşabilir. Türkçe karakterler kullanılamaz. Rakam ile başlayamaz',
    'attributes'                     => [],

];
