using System;
using System.Windows;

namespace zad1
{
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void GeneratePasswordButton_Click(object sender, RoutedEventArgs e)
        {
            // Pobierz długość hasła
            if (!int.TryParse(PasswordLengthTextBox.Text, out int length) || length <= 0)
            {
                MessageBox.Show("Podaj poprawną długość hasła (liczba większa od 0).", "Błąd", MessageBoxButton.OK, MessageBoxImage.Warning);
                return;
            }

            // Sprawdź opcje
            string characters = "";
            if (IncludeLettersCheckBox.IsChecked == true)
                characters += "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            if (IncludeDigitsCheckBox.IsChecked == true)
                characters += "0123456789";
            if (IncludeSpecialCharsCheckBox.IsChecked == true)
                characters += "!@#$%^&*()-_=+[]{};:,.<>?";

            if (string.IsNullOrEmpty(characters))
            {
                MessageBox.Show("Wybierz przynajmniej jedną opcję znaków.", "Błąd", MessageBoxButton.OK, MessageBoxImage.Warning);
                return;
            }

            // Generuj hasło
            Random random = new Random();
            string password = "";
            for (int i = 0; i < length; i++)
            {
                password += characters[random.Next(characters.Length)];
            }

            // Wyświetl wynik
            MessageBox.Show($"Wygenerowane hasło: {password}", "Hasło", MessageBoxButton.OK, MessageBoxImage.Information);
        }
    }
}
