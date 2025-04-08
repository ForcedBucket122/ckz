using System;
using System.Windows;
using System.Windows.Controls;

namespace zad3
{
    public partial class MainWindow : Window
    {
        // Kursy walut w stosunku do PLN
        private readonly double USD_TO_PLN = 4.5;
        private readonly double EURO_TO_PLN = 4.8;

        public MainWindow()
        {
            InitializeComponent();
            Loaded += MainWindow_Loaded;
        }

        private void MainWindow_Loaded(object sender, RoutedEventArgs e)
        {
            UpdateCurrencyLabels();
        }

        private void OnRadioClick(object sender, RoutedEventArgs e)
        {
            UpdateCurrencyLabels();
            ConvertCurrency();
        }

        private void UpdateCurrencyLabels()
        {
            // Sprawdź, czy obiekty są dostępne
            if (WalutaZrodlowa == null || WalutaDocelowa == null) return;

            // Ustaw walutę źródłową
            if (PLN1.IsChecked == true)
                WalutaZrodlowa.Text = "PLN";
            else if (USD1.IsChecked == true)
                WalutaZrodlowa.Text = "USD";
            else if (EURO1.IsChecked == true)
                WalutaZrodlowa.Text = "EURO";

            // Ustaw walutę docelową
            if (PLN2.IsChecked == true)
                WalutaDocelowa.Text = "PLN";
            else if (USD2.IsChecked == true)
                WalutaDocelowa.Text = "USD";
            else if (EURO2.IsChecked == true)
                WalutaDocelowa.Text = "EURO";
        }

        private void ConvertCurrency()
        {
            if (!double.TryParse(In1.Text, out double amount))
            {
                In2.Text = "0";
                return;
            }

            double result = 0;

            // Pobierz walutę źródłową i docelową
            string source = WalutaZrodlowa?.Text ?? "PLN";
            string target = WalutaDocelowa?.Text ?? "PLN";

            if (source == "PLN")
            {
                if (target == "USD") result = amount / USD_TO_PLN;
                else if (target == "EURO") result = amount / EURO_TO_PLN;
                else result = amount;
            }
            else if (source == "USD")
            {
                if (target == "PLN") result = amount * USD_TO_PLN;
                else if (target == "EURO") result = (amount * USD_TO_PLN) / EURO_TO_PLN;
                else result = amount;
            }
            else if (source == "EURO")
            {
                if (target == "PLN") result = amount * EURO_TO_PLN;
                else if (target == "USD") result = (amount * EURO_TO_PLN) / USD_TO_PLN;
                else result = amount;
            }

            In2.Text = Math.Round(result, 2).ToString();
        }

        private void Scroll_ValueChanged(object sender, RoutedPropertyChangedEventArgs<double> e)
        {
            In1.Text = Scroll.Value.ToString("F0");
            ConvertCurrency();
        }

        private void In1_TextChanged(object sender, TextChangedEventArgs e)
        {
            ConvertCurrency();
        }
    }
}
