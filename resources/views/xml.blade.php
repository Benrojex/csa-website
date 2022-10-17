<?xml version="1.0"?>
<configuration>
  <configSections>
    <sectionGroup name="userSettings" type="System.Configuration.UserSettingsGroup, System, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089">
      <section name="csa.My.MySettings" type="System.Configuration.ClientSettingsSection, System, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089" allowExeDefinition="MachineToLocalUser" requirePermission="false"/>
    </sectionGroup>
  </configSections>
  <connectionStrings>
    <add name="DefaultConnection" connectionString="Data Source = |SQL/CE|" />
    <add name="csa.My.MySettings.FSDBConnectionString" connectionString="Provider=Microsoft.ACE.OLEDB.12.0;Data Source=|DataDirectory|\DATA\FSDB.csa;Persist Security Info=True"
      providerName="System.Data.OleDb" />
    <add name="csa.My.MySettings.myConString" connectionString="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|\DATA\FSDB.csa;Persist Security Info=True"
      providerName="System.Data.OleDb" />
    <add name="csa.My.MySettings.FSDBConnectionString2" connectionString="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|\DATA\FSDB.csa"
      providerName="System.Data.OleDb" />
    <add name="csa.My.MySettings.attendanceDbConnectionString" connectionString="Provider=Microsoft.ACE.OLEDB.12.0;Data Source=|DataDirectory|\attendanceDb.accdb"
      providerName="System.Data.OleDb" />
  </connectionStrings>
  <system.diagnostics>
    <sources>
      <!-- This section defines the logging configuration for My.Application.Log -->
      <source name="DefaultSource" switchName="DefaultSwitch">
        <listeners>
          <add name="FileLogListener" />
          <!--add name="FileLog"/-->
          <!-- Uncomment the below section to write to the Application Event Log -->
          <!--<add name="EventLog"/>-->
        </listeners>
      </source>
    </sources>
    <switches>
      <add name="DefaultSwitch" value="Information"/>
    </switches>
    <sharedListeners>
      <add name="FileLogListener"
    type="Microsoft.VisualBasic.Logging.FileLogTraceListener, &#xD;&#xA;          Microsoft.VisualBasic, Version=8.0.0.0, Culture=neutral, &#xD;&#xA;          PublicKeyToken=b03f5f7f11d50a3a"


    initializeData="FileLogListenerWriter"
    />
      
      
      <!--add name="FileLog" type="Microsoft.VisualBasic.Logging.FileLogTraceListener, Microsoft.VisualBasic, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b03f5f7f11d50a3a, processorArchitecture=MSIL" initializeData="FileLogWriter"/-->
      <!-- Uncomment the below section and replace APPLICATION_NAME with the name of your application to write to the Application Event Log -->
      <!--add name="EventLog" type="System.Diagnostics.EventLogTraceListener" initializeData="Field Service Report Program"/-->
    </sharedListeners>
  </system.diagnostics>
  <!--userSettings>
    <FS.My.MySettings>
      <setting name="Main_form" serializeAs="String">
        <value />
      </setting>
      <setting name="Username" serializeAs="String">
        <value />
      </setting>
      <setting name="Userpassword" serializeAs="String">
        <value />
      </setting>
      <setting name="Userhint" serializeAs="String">
        <value />
      </setting>
    </FS.My.MySettings>
  </userSettings-->
  <startup>
    
  
  <supportedRuntime version="v4.0" sku=".NETFramework,Version=v4.5"/></startup>

   <userSettings>
    <csa.My.MySettings>
     <setting name="login" serializeAs="String">
      <value>password</value>
     </setting>
     <setting name="firstUse" serializeAs="String">
      <value>0</value>
     </setting>
     <setting name="pastip" serializeAs="String">
      <value>Type password and click Ok</value>
     </setting>
     <setting name="formsColor" serializeAs="String">
      <value>224, 224, 224</value>
     </setting>
     <setting name="view_help_prompt" serializeAs="String">
      <value>True</value>
     </setting>
     <setting name="updateLocation" serializeAs="String">
      <value>https://csa.rojextech.com</value>
     </setting>
     <setting name="updateLocation2" serializeAs="String">
      <value>http://localhost:8000</value>
     </setting>
     <setting name="CPRC_Dir" serializeAs="String">
      <value />
     </setting>
     <setting name="fresh_CPRC_source" serializeAs="String">
      <value />
     </setting>
     <setting name="SentCPR_Dir" serializeAs="String">
      <value />
     </setting>
     <setting name="tempCard_Dir" serializeAs="String">
      <value />
     </setting>
     <setting name="last_feedback_reminder_date" serializeAs="String">
      <value />
     </setting>
     <setting name="app_site" serializeAs="String">
      <value>http://localhost:8000</value>
     </setting>
     <setting name="registerd" serializeAs="String">
      <value>False</value>
     </setting>
    </csa.My.MySettings>
  </userSettings>

  <system.windows.forms jitDebugging="true" />
  
</configuration>
