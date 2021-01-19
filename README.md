# テーブル設計

## users テーブル

| Column             | Type   | Options     |
| ------------------ | ------ | ----------- |
| nickname           | string | null: false |
| email              | string | null: false |
| encrypted_password | string | null: false |
| last_name          | string | null: false |
| first_name         | string | null: false |
| last_name_kana     | string | null: false |
| first_name_kana    | string | null: false |
| address            | string |             |
| tel_number         | string |             |


### Association

- has_many :injuries

## injuries テーブル

| Column             | Type       | Options                        |
| ------------------ | ---------- | ------------------------------ |
| injury_site        | string     | null: false                    |
| when_injured       | string     | null: false                    |
| MOI                | string     | null: false                    |
| pain_type_id       | integer    | null: false                    |
| painful_motion     | string     | null: false                    |
| how_painful        | string     | null: false                    |
| comments           | string     | null: false                    |
| user_id            | references | null: false, foreign_key: true |

### Association

- belongs_to :user
- has_many :evaluations


## doctors テーブル

| Column              | Type   | Options     |
| ------------------- | ------ | ----------- |
| last_name           | string | null: false |
| first_name          | string | null: false |
| last_name_kana      | string | null: false |
| first_name_kana     | string | null: false |
| email               | string | null: false |
| encrypted_password  | string | null: false |
| hospital_name       | string | null: false |
| hospital_address    | string | null: false |
| hospital_tel_number | string | null: false |

### Association

- has_many :evaluations


## evaluations テーブル

| Column             | Type       | Options                        |
| ------------------ | ---------- | ------------------------------ |  
| injury_name        | string     | null: false                    |
| treatment          | string     | null: false                    |
| rehabilitation     | string     |                                |
| comments           | string     | null: false                    |
| doctor_id          | references | null: false, foreign_key: true |
| injury_id          | references | null: false, foreign_key: true |

### Association

- belongs_to :doctor
- belongs_to :injury

