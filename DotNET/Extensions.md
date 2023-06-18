>> String Extension (Remove hyper link from text)
```
using System.Text;
using System.Text.RegularExpressions;

namespace DevSkill.Web.Extensions
{
    public static class StringExtensions
    {
        private static string[] _patterns = {
            @"https?://[^\s/$.?#].[^\s]*",
            @"http?://[^\s/$.?#].[^\s]*",
            "<a [^>]*href=(?:'(?<href>.*?)')|(?:\"(?<href>.*?)\")"
        };

        public static string ReplaceHyperlink(this string value, string replaceWith = null)
        {
            var result = value;

            foreach (var pattern in _patterns)
            {
                var regex = new Regex(pattern, RegexOptions.IgnoreCase);
                result = Regex.Replace(result, regex.ToString(), replaceWith);
            }

            return result;
        }
    }
}
```