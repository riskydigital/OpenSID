; Script generated by the Inno Setup Script Wizard.
; SEE THE DOCUMENTATION FOR DETAILS ON CREATING INNO SETUP SCRIPT FILES!

#define MyAppName "OpenSID Webserver"
#define MyAppVersion "2.0"
#define MyAppPublisher "OpenSID"
#define MyAppURL "https://github.com/OpenSID"
#define MyAppExeName "xampp-control.exe"

[Setup]
; NOTE: The value of AppId uniquely identifies this application.
; Do not use the same AppId value in installers for other applications.
; (To generate a new GUID, click Tools | Generate GUID inside the IDE.)
AppID={{16A519F8-7B87-4812-87E5-F9F8B1FFEFA2}
AppName={#MyAppName}
AppVersion={#MyAppVersion}
;AppVerName={#MyAppName} {#MyAppVersion}
AppPublisher={#MyAppPublisher}
AppPublisherURL={#MyAppURL}
AppSupportURL={#MyAppURL}
AppUpdatesURL={#MyAppURL}
DefaultDirName=c:\opensid-webserver
DisableDirPage=yes
DefaultGroupName={#MyAppName}
DisableProgramGroupPage=yes
OutputBaseFilename=setup-opensid-webserver
Compression=lzma/Normal
SolidCompression=true
WizardImageFile=D:\MapWave\setup\WizModernImage-IS_OpenSID.bmp
WizardSmallImageFile=D:\MapWave\setup\WizModernSmallImage-IS_OpenSID_Small.bmp
ShowLanguageDialog=no

[Languages]
Name: "english"; MessagesFile: "compiler:Default.isl"

[Files]

Source: D:\opensid-webserver\xampp_stop.exe; DestDir: {app}; 
Source: D:\opensid-webserver\xampp-control.exe; DestDir: {app}; 
Source: D:\opensid-webserver\xampp_start.exe; DestDir: {app}; 
Source: D:\opensid-webserver\opensid.ico; DestDir: {app}; 
Source: D:\opensid-webserver\*; DestDir: {app}; Flags: ignoreversion recursesubdirs createallsubdirs




[Languages]
Name: en; MessagesFile: "compiler:Default.isl"

[CustomMessages]
en.InstallingLabel=Installing...

[Code]
procedure InitializeWizard;
begin
  with TNewStaticText.Create(WizardForm) do
  begin
    Parent := WizardForm.FilenameLabel.Parent;
    Left := WizardForm.FilenameLabel.Left;
    Top := WizardForm.FilenameLabel.Top;
    Width := WizardForm.FilenameLabel.Width;
    Height := WizardForm.FilenameLabel.Height;
    Caption := ExpandConstant('{cm:InstallingLabel}');
  end;
  WizardForm.FilenameLabel.Visible := False;
end;

[Dirs]

[Icons]
Name: "{group}\Stop XAMPP"; Filename: {app}\xampp_stop.exe; IconFilename: {app}\xampp_stop.exe; WorkingDir: {app}; 
Name: "{group}\Start XAMPP"; Filename: {app}\xampp_start.exe; WorkingDir: {app}; IconFilename: {app}\xampp_stop.exe; 
Name: "{group}\Panel Kontrol XAMPP"; Filename: {app}\xampp-control.exe; WorkingDir: {app}; IconFilename: {app}\xampp_stop.exe; IconIndex: 0;
Name: "{group}\Halaman Muka OpenSID"; Filename: "http://localhost"; IconFilename: {app}\opensid.ico; IconIndex: 0;
Name: "{group}\Halaman Administrator OpenSID"; Filename: "http://localhost/index.php/siteman"; IconFilename: {app}\opensid.ico; IconIndex: 0;
