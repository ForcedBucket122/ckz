using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace zad4
{
    /// <summary>
    /// Logika interakcji dla klasy AnswerWindow.xaml
    /// </summary>
    public partial class AnswerWindow : Window
    {
        public string Answer { get; private set; }

        public AnswerWindow()
        {
            InitializeComponent();
        }

        // Obsługa przycisku Ok
        private void OkButton_Click(object sender, RoutedEventArgs e)
        {
            Answer = AnswerTextBox.Text;
            DialogResult = true;
            Close();
        }

        // Obsługa przycisku Cancel
        private void CancelButton_Click(object sender, RoutedEventArgs e)
        {
            DialogResult = false;
            Close();
        }
    }
}
