		#include <bits/stdc++.h>
		using namespace std;

		typedef long long ll;

		#define vi vector<int>
		#define vl vector<ll>
		#define vii vector<vector<int>>
		#define vll vector<vector<ll>>
		#define vs vector<string>
		#define pii pair<int, int>
		#define pis pair<int, string>
		#define psi pair<string, int>
		#define pll pair<ll, ll>
		template <class S, class T>
		pair<S, T> operator+(const pair<S, T> &s, const pair<S, T> &t) {
			return pair<S, T>(s.first + t.first, s.second + t.second);
		}
		template <class S, class T>
		pair<S, T> operator-(const pair<S, T> &s, const pair<S, T> &t) {
			 return pair<S, T>(s.first - t.first, s.second - t.second); 
		}
		template <class S, class T>
		ostream &operator<<(ostream &os, pair<S, T> p) {
			os << "(" << p.first << ", " << p.second << ")";
			return os;
		}
		bool operator<(const vector<int> & s, const vector<int>& t) {
			return ((s[0] < t[0]) && (s[1] < t[1]));
		}

		#define X first
		#define Y second
		#define rep(i, n) for (int i = 0; i < (int)(n); i++)
		#define rep1(i, n) for (int i = 1; i <= (int)(n); i++)
		#define rrep(i, n) for (int i = (int)(n)-1; i >= 0; i--)
		#define rrep1(i, n) for (int i = (int)(n); i > 0; i--)
		#define REP(i, a, b) for (int i = a; i < b; i++)
		#define in(x, a, b) (a <= x && x < b)
		#define all(c) c.begin(), c.end()
		#define rall(c) c.rbegin(), c.rend()

		void YES(bool t = true) { cout << (t ? "YES" : "NO") << endl; }
		void Yes(bool t = true) { cout << (t ? "Yes" : "No") << endl; }
		void yes(bool t = true) { cout << (t ? "yes" : "no") << endl; }
		void NO(bool t = true) { cout << (t ? "NO" : "YES") << endl; }
		void No(bool t = true) { cout << (t ? "No" : "Yes") << endl; }
		void no(bool t = true) { cout << (t ? "no" : "yes") << endl; }

		template<class S>
		void PRINT(vector<S> V){
			for(const auto& v : V)
				cout << v << " ";
			cout << "\n";
		}
		#define UNIQUE(v) v.erase(std::unique(v.begin(), v.end()), v.end());

		const ll inf = 1000000001;
		const ll INF = (ll)1e18 + 1;
		const long double pi = 3.1415926535897932384626433832795028841971L;

		struct hash_pair {
			template <class T1, class T2>
			size_t operator()(const pair<T1, T2>& p) const
			{
				auto hash1 = hash<T1>{}(p.first);
				auto hash2 = hash<T2>{}(p.second);
				return hash1 ^ hash2;
			}
		};

		vi primeFactors(int n){
			vi ans;
			while(n%2 == 0){
				ans.push_back(2);
				 n/=2;
			 }
			for(int i = 3; i*i <= n; i+=2){
				while(n%i == 0){
					ans.push_back(i);
					n/=i;
				}
			}
			if(n>2)
				ans.push_back(n);
			return ans;
		}

		ll mode(ll temp, ll n){
			if(temp >= n)
				return temp%n;
			if(temp < 0)
				return n+(temp%n);
			return temp;
		}

		void solve(){
			ll n, k, ans=0; cin >> n >> k;
			vl V(n*n);
			rep(i,n*n)
				cin >> V[i];
			sort(rall(V));
			ll x = ((n+1)/2+(n+1)%2)*n;
			rep(i, x)
			    cout << V[i] << " ";
			ans = V[x];
			cout << ans << endl;
		}

		signed main() {
			ios::sync_with_stdio(false);
			cin.tie(0);
			int t; cin >> t; 
			rep(i, t) {
				solve();
			}
			return 0;
		}
