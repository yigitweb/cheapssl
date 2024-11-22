<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 29,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 30,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 31,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 32,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 33,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 34,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 35,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 36,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 37,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 38,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 39,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 40,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 41,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 42,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 43,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 44,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 45,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 46,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 47,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 48,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 49,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 50,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 51,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 52,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 53,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 54,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 55,
                'title' => 'product_create',
            ],
            [
                'id'    => 56,
                'title' => 'product_edit',
            ],
            [
                'id'    => 57,
                'title' => 'product_show',
            ],
            [
                'id'    => 58,
                'title' => 'product_delete',
            ],
            [
                'id'    => 59,
                'title' => 'product_access',
            ],
            [
                'id'    => 60,
                'title' => 'team_create',
            ],
            [
                'id'    => 61,
                'title' => 'team_edit',
            ],
            [
                'id'    => 62,
                'title' => 'team_show',
            ],
            [
                'id'    => 63,
                'title' => 'team_delete',
            ],
            [
                'id'    => 64,
                'title' => 'team_access',
            ],
            [
                'id'    => 65,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 66,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 67,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 68,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 69,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 70,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 71,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 72,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 73,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 74,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 75,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 76,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 77,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 78,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 79,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 80,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 81,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 82,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 83,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 84,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 85,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 86,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 87,
                'title' => 'asset_create',
            ],
            [
                'id'    => 88,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 89,
                'title' => 'asset_show',
            ],
            [
                'id'    => 90,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 91,
                'title' => 'asset_access',
            ],
            [
                'id'    => 92,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 93,
                'title' => 'haber_create',
            ],
            [
                'id'    => 94,
                'title' => 'haber_edit',
            ],
            [
                'id'    => 95,
                'title' => 'haber_show',
            ],
            [
                'id'    => 96,
                'title' => 'haber_delete',
            ],
            [
                'id'    => 97,
                'title' => 'haber_access',
            ],
            [
                'id'    => 98,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 99,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 100,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 101,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 102,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 103,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 104,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 105,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 106,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 107,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 108,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 109,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 110,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 111,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 112,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 113,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 114,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 115,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 116,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 117,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 118,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 119,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 120,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 121,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 122,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 123,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 124,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 125,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 126,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 127,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 128,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 129,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 130,
                'title' => 'expense_create',
            ],
            [
                'id'    => 131,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 132,
                'title' => 'expense_show',
            ],
            [
                'id'    => 133,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 134,
                'title' => 'expense_access',
            ],
            [
                'id'    => 135,
                'title' => 'income_create',
            ],
            [
                'id'    => 136,
                'title' => 'income_edit',
            ],
            [
                'id'    => 137,
                'title' => 'income_show',
            ],
            [
                'id'    => 138,
                'title' => 'income_delete',
            ],
            [
                'id'    => 139,
                'title' => 'income_access',
            ],
            [
                'id'    => 140,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 141,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 142,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 143,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 144,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 145,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 146,
                'title' => 'currency_create',
            ],
            [
                'id'    => 147,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 148,
                'title' => 'currency_show',
            ],
            [
                'id'    => 149,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 150,
                'title' => 'currency_access',
            ],
            [
                'id'    => 151,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 152,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 153,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 154,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 155,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 156,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 157,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 158,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 159,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 160,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 161,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 162,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 163,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 164,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 165,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 166,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 167,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 168,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 169,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 170,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 171,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 172,
                'title' => 'client_create',
            ],
            [
                'id'    => 173,
                'title' => 'client_edit',
            ],
            [
                'id'    => 174,
                'title' => 'client_show',
            ],
            [
                'id'    => 175,
                'title' => 'client_delete',
            ],
            [
                'id'    => 176,
                'title' => 'client_access',
            ],
            [
                'id'    => 177,
                'title' => 'project_create',
            ],
            [
                'id'    => 178,
                'title' => 'project_edit',
            ],
            [
                'id'    => 179,
                'title' => 'project_show',
            ],
            [
                'id'    => 180,
                'title' => 'project_delete',
            ],
            [
                'id'    => 181,
                'title' => 'project_access',
            ],
            [
                'id'    => 182,
                'title' => 'note_create',
            ],
            [
                'id'    => 183,
                'title' => 'note_edit',
            ],
            [
                'id'    => 184,
                'title' => 'note_show',
            ],
            [
                'id'    => 185,
                'title' => 'note_delete',
            ],
            [
                'id'    => 186,
                'title' => 'note_access',
            ],
            [
                'id'    => 187,
                'title' => 'document_create',
            ],
            [
                'id'    => 188,
                'title' => 'document_edit',
            ],
            [
                'id'    => 189,
                'title' => 'document_show',
            ],
            [
                'id'    => 190,
                'title' => 'document_delete',
            ],
            [
                'id'    => 191,
                'title' => 'document_access',
            ],
            [
                'id'    => 192,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 193,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 194,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 195,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 196,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 197,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 198,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 199,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 200,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 201,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 202,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
