﻿#pragma checksum "..\..\..\ankieta.xaml" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "9D68431B6BEA9B4DAD9D774CB9E4D2AD42B95875"
//------------------------------------------------------------------------------
// <auto-generated>
//     Ten kod został wygenerowany przez narzędzie.
//     Wersja wykonawcza:4.0.30319.42000
//
//     Zmiany w tym pliku mogą spowodować nieprawidłowe zachowanie i zostaną utracone, jeśli
//     kod zostanie ponownie wygenerowany.
// </auto-generated>
//------------------------------------------------------------------------------

using System;
using System.Diagnostics;
using System.Windows;
using System.Windows.Automation;
using System.Windows.Controls;
using System.Windows.Controls.Primitives;
using System.Windows.Controls.Ribbon;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Markup;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Media.Effects;
using System.Windows.Media.Imaging;
using System.Windows.Media.Media3D;
using System.Windows.Media.TextFormatting;
using System.Windows.Navigation;
using System.Windows.Shapes;
using System.Windows.Shell;
using zad1;


namespace zad1 {
    
    
    /// <summary>
    /// ankieta
    /// </summary>
    public partial class ankieta : System.Windows.Window, System.Windows.Markup.IComponentConnector {
        
        
        #line 12 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.TextBox imie;
        
        #line default
        #line hidden
        
        
        #line 16 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.TextBox nazwisko;
        
        #line default
        #line hidden
        
        
        #line 20 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.RadioButton kobieta;
        
        #line default
        #line hidden
        
        
        #line 21 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.RadioButton mezczyzna;
        
        #line default
        #line hidden
        
        
        #line 25 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.CheckBox programowanie;
        
        #line default
        #line hidden
        
        
        #line 26 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.CheckBox Muzyka;
        
        #line default
        #line hidden
        
        
        #line 27 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.CheckBox Film;
        
        #line default
        #line hidden
        
        
        #line 30 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.ComboBox szkola;
        
        #line default
        #line hidden
        
        
        #line 36 "..\..\..\ankieta.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.TextBox osobie;
        
        #line default
        #line hidden
        
        private bool _contentLoaded;
        
        /// <summary>
        /// InitializeComponent
        /// </summary>
        [System.Diagnostics.DebuggerNonUserCodeAttribute()]
        [System.CodeDom.Compiler.GeneratedCodeAttribute("PresentationBuildTasks", "9.0.3.0")]
        public void InitializeComponent() {
            if (_contentLoaded) {
                return;
            }
            _contentLoaded = true;
            System.Uri resourceLocater = new System.Uri("/zad1;component/ankieta.xaml", System.UriKind.Relative);
            
            #line 1 "..\..\..\ankieta.xaml"
            System.Windows.Application.LoadComponent(this, resourceLocater);
            
            #line default
            #line hidden
        }
        
        [System.Diagnostics.DebuggerNonUserCodeAttribute()]
        [System.CodeDom.Compiler.GeneratedCodeAttribute("PresentationBuildTasks", "9.0.3.0")]
        [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Never)]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Design", "CA1033:InterfaceMethodsShouldBeCallableByChildTypes")]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Maintainability", "CA1502:AvoidExcessiveComplexity")]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1800:DoNotCastUnnecessarily")]
        void System.Windows.Markup.IComponentConnector.Connect(int connectionId, object target) {
            switch (connectionId)
            {
            case 1:
            this.imie = ((System.Windows.Controls.TextBox)(target));
            return;
            case 2:
            this.nazwisko = ((System.Windows.Controls.TextBox)(target));
            return;
            case 3:
            this.kobieta = ((System.Windows.Controls.RadioButton)(target));
            return;
            case 4:
            this.mezczyzna = ((System.Windows.Controls.RadioButton)(target));
            return;
            case 5:
            this.programowanie = ((System.Windows.Controls.CheckBox)(target));
            return;
            case 6:
            this.Muzyka = ((System.Windows.Controls.CheckBox)(target));
            return;
            case 7:
            this.Film = ((System.Windows.Controls.CheckBox)(target));
            return;
            case 8:
            this.szkola = ((System.Windows.Controls.ComboBox)(target));
            return;
            case 9:
            this.osobie = ((System.Windows.Controls.TextBox)(target));
            return;
            case 10:
            
            #line 38 "..\..\..\ankieta.xaml"
            ((System.Windows.Controls.Button)(target)).Click += new System.Windows.RoutedEventHandler(this.ZapiszWNowym);
            
            #line default
            #line hidden
            return;
            }
            this._contentLoaded = true;
        }
    }
}

