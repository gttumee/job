<?php

return [
    'userManagement' => [
        'title'          => 'Хэрэглэгч тохиргоо',
        'title_singular' => 'Хэрэглэгч тохиргоо',
    ],
    'permission'     => [
        'title'          => 'Зөвшөөрөлүүд',
        'title_singular' => 'Зөвшөөрөл',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Гарчиг',
            'title_helper'      => '',
            'created_at'        => 'Бүргүүлсэн',
            'created_at_helper' => '',
            'updated_at'        => 'Шинэчилсэн',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Эрхүүд',
        'title_singular' => 'Эрх',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Устгасан',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Хэрэглэгч',
        'title_singular' => 'Хэрэглэгч',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Нэр',
            'name_helper'              => '',
            'email'                    => 'И-мэйл',
            'email_helper'             => '',
            'email_verified_at'        => 'и-мэйл баталгаажуулалт',
            'email_verified_at_helper' => '',
            'password'                 => 'Нууц үг',
            'password_helper'          => '',
            'roles'                    => 'Эрх',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Бүргүүлсэн',
            'created_at_helper'        => '',
            'updated_at'               => 'Шинэчилсэн',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Устгасан',
            'deleted_at_helper'        => '',
        ],
    ],
    'category'       => [
        'title'          => 'Төрөл',
        'title_singular' => 'Төрөл',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Нэр',
            'name_helper'       => '',
            'created_at'        => 'Бүргүүлсэн',
            'created_at_helper' => '',
            'updated_at'        => 'Шинэчилсэн',
            'updated_at_helper' => '',
            'deleted_at'        => 'Устгасан',
            'deleted_at_helper' => '',
        ],
    ],
    'location'       => [
        'title'          => 'Байршил',
        'title_singular' => 'Байршил',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Нэр',
            'name_helper'       => '',
            'created_at'        => 'Бүргүүлсэн',
            'created_at_helper' => '',
            'updated_at'        => 'Шинэчилсэн',
            'updated_at_helper' => '',
            'deleted_at'        => 'Устгасан',
            'deleted_at_helper' => '',
        ],
    ],
    'company'        => [
        'title'          => 'Компани',
        'title_singular' => 'Компани',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Нэр',
            'name_helper'       => '',
            'logo'              => 'Лого',
            'logo_helper'       => '',
            'created_at'        => 'Бүргүүлсэн',
            'created_at_helper' => '',
            'updated_at'        => 'Шинэчилсэн',
            'updated_at_helper' => '',
            'deleted_at'        => 'Устгасан',
            'deleted_at_helper' => '',
        ],
    ],
    'job'            => [
        'title'          => 'Ажил',
        'title_singular' => 'Ажил',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'title'                    => 'Гарчиг',
            'title_helper'             => '',
            'short_description'        => 'Ажилын байрны нэр',
            'short_description_helper' => '',
            'full_description'         => 'Ажилын тодорхойлолт',
            'full_description_helper'  => '',
            'requirements'             => 'Шаардлага',
            'requirements_helper'      => '',
            'job_nature'               => 'Цагын төрөл',
            'job_nature_helper'        => '',
            'location'                 => 'Байршил',
            'location_helper'          => '',
            'address'                  => 'Хаяг',
            'address_helper'           => '',
            'top_rated'                => 'Сайн үзүүлэлттэй',
            'top_rated_helper'         => '',
            'created_at'               => 'Бүртгүүлсэн',
            'created_at_helper'        => '',
            'updated_at'               => 'Шинэчилсэн',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Устгасан',
            'deleted_at_helper'        => '',
            'company'                  => 'Компани',
            'company_helper'           => '',
            'categories'               => 'Төрөл',
            'categories_helper'        => '',
            'salary'                   => 'Цалин',
            'salary_helper'            => '',
        ],
    ],
];