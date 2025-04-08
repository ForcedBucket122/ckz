using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace zad4
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        private List<string> questions = new List<string> { "3 + 9 = ?", "5 + 0 = ?", "5 + 1 = ?" };
        private List<string> answers = new List<string> { "", "", "" };

        public MainWindow()
        {
            InitializeComponent();
            UpdateQuestionList();
        }

        // Aktualizacja ListBoxa z pytaniami
        private void UpdateQuestionList()
        {
            QuestionListBox.Items.Clear();
            for (int i = 0; i < questions.Count; i++)
            {
                QuestionListBox.Items.Add($"{questions[i]} {answers[i]}");
            }
        }

        // Obsługa przycisku Add
        

        // Obsługa kliknięcia na pytanie w ListBox
        private void QuestionListBox_SelectionChanged(object sender, System.Windows.Controls.SelectionChangedEventArgs e)
        {
            int selectedIndex = QuestionListBox.SelectedIndex;
            if (selectedIndex >= 0)
            {
                var answerWindow = new AnswerWindow();
                if (answerWindow.ShowDialog() == true && !string.IsNullOrWhiteSpace(answerWindow.Answer))
                {
                    answers[selectedIndex] = $"= {answerWindow.Answer}";
                    UpdateQuestionList();
                }
            }
        }
    }
}