<?php

require_once __DIR__ . '/pages/document/Document.model.php';
require_once __DIR__ . '/components/databaseConnection.php';
require_once __DIR__ . "/components/component.interface.php";
require_once __DIR__ . '/components/BaseFormComponent.php';
require_once __DIR__ . '/components/menu.php';
require_once __DIR__ . '/components/list-page/BaseListPage.php';
require_once __DIR__ . '/components/PaginatorComponent.php';
require_once __DIR__ . '/components/invoice/InvoiceListComponent.php';
require_once __DIR__ . '/components/invoice/AddInvoiceComponent.php';
require_once __DIR__ . '/pages/document/AddDocumentComponent.php';
require_once __DIR__ . '/pages/document/DocumentValidation.php';
require_once __DIR__ . '/pages/document/DocumentListComponent.php';
require_once __DIR__ . '/pages/document/DocumentSearchForm.php';
require_once __DIR__ . '/pages/equipment/EquipmentListComponent.php';
require_once __DIR__ . '/pages/equipment/EquipmentSearchForm.php';
require_once __DIR__ . '/pages/equipment/EquipmentValidation.php';
require_once __DIR__ . '/pages/equipment/AddEquipmentComponent.php';
require_once __DIR__ . '/pages/licence/LicenceListComponent.php';
require_once __DIR__ . '/pages/licence/LicenceValidation.php';
require_once __DIR__ . '/pages/licence/Licence.model.php';
require_once __DIR__ . '/pages/equipment/Equipment.model.php';
require_once __DIR__ . '/pages/licence/AddLicenceComponent.php';
require_once __DIR__ . '/pages/user/User.php';
require_once __DIR__ . '/pages/user/UserListComponent.php';
require_once __DIR__ . '/pages/user/UserValidation.php';
require_once __DIR__ . '/pages/user/AddUserComponent.php';
require_once __DIR__ . '/components/invoice/InvoiceSearchForm.php';
require_once __DIR__ . '/components/BaseAddPage.php';
require_once __DIR__ . '/components/field-components/BaseInputField.php';
require_once __DIR__ . '/components/field-components/NumberInputField.php';
require_once __DIR__ . '/components/field-components/TextInputField.php';
require_once __DIR__ . '/components/field-components/FileInputField.php';
require_once __DIR__ . '/components/field-components/DateInputField.php';
require_once __DIR__ . '/components/field-components/PasswordInputField.php';
require_once __DIR__ . '/components/field-components/SelectField.php';
require_once __DIR__ . '/pages/invoice-shared/InvoiceValidation.php';
require_once __DIR__ . '/pages/sell-invoice/SellInvoice.php';
require_once __DIR__ . '/pages/sell-invoice/SellInvoiceListComponent.php';
require_once __DIR__ . '/pages/buy-invoice/BuyInvoiceListComponent.php';
require_once __DIR__ . '/../bootstrap/use-bootstrap.php';
require_once __DIR__ . '/database/Pagination.php';
require_once __DIR__ . '/util/printTop.php';
require_once __DIR__ . '/pages/buy-invoice/BuyInvoice.php';
require_once __DIR__ . '/database/SearchValues.php';
require_once __DIR__ . '/pages/summary/MonthForm.php';
require_once __DIR__ . '/pages/summary/SummaryComponent.php';
require_once __DIR__ . '/pages/summary/SummaryForm.php';
require_once __DIR__ . '/pages/login/LoginComponent.php';
require_once __DIR__ . '/pages/login/LoginValidation.php';
require_once __DIR__ . '/pages/welcome/WelcomeComponent.php';
